<?php

namespace App\Http\Controllers;

use Exception;

use Carbon\Carbon;
use App\Models\HallManage;
use Illuminate\Http\Request;
use App\Models\BookingManage;
use App\Models\PaymentManage;
use App\Jobs\UpdateBookingStatus;

use App\Jobs\UpdatePendingStatus;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Session;
use App\Http\Requests\SearchPageRequest;
use App\Models\User;
use Illuminate\Console\Scheduling\Schedule;

class HomeController extends Controller
{



    public function index()
    {
        $halls = HallManage::latest()->get();
        return view('backend.dashboard', compact('halls'));
    }
    public function searchresult()
    {
        $halls = HallManage::latest()->get();
        return view('backend.searchresult', compact('halls'));
    }

    public function hallSearch(SearchPageRequest $request)
    {
        $charity = $request->input('charity');
        $hall = $request->hall;
        $start_time = $request->start_time;
        $end_time = $request->end_time;

        if (strtotime($request->input('check_in_date')) > strtotime($request->input('check_out_date'))) {
            return redirect()->back()->with('message', 'Invalid date selection. Check-in date cannot be greater than check-out date.');
        }
        if (strtotime($request->input('start_time')) > strtotime($request->input('end_time'))) {
            return redirect()->back()->with('message', 'Invalid time selection. Start time cannot be greater than end time.');
        }

        $query = BookingManage::where('booking_manages.check_in_date', '<=', $request->input('check_out_date'))
        ->where('booking_manages.check_out_date', '>=', $request->input('check_in_date'));

        if ($request->hall != 0) {
            $query->where('booking_manages.hall_manage_id', $request->hall);
        }

        $existingBooking = $query->get();

        $bookingCount = $existingBooking->count();

        $check_in_date_view = $request->check_in_date;
        $check_out_date_view = $request->check_out_date;

        $checkInDate = new \DateTime($request->check_in_date);
        $checkOutDate = new \DateTime($request->check_out_date);
        $numberOfDays = $checkInDate->diff($checkOutDate)->days;
        $numberOfDays = $numberOfDays + 1;


        if ($request->hall != 0 && $bookingCount==0) {

            if ($charity == 1) {
                $hallInfo = HallManage::find($request->hall);
                $discount_price = ($hallInfo->price - ($hallInfo->price * $hallInfo->charity_discount) / 100);
            } else {
                $hallInfo = HallManage::find($request->hall);
                $discount_price = $hallInfo->price;
            }


            return view('backend.halllist', compact('hallInfo', 'discount_price', 'numberOfDays', 'charity', 'check_in_date_view', 'check_out_date_view','hall','start_time','end_time'));


        } else if ($request->hall == 0 ) {

                $booking_idsbooked = $existingBooking->pluck('hall_manage_id');
                $filteredHallInfo = HallManage::all();
                $allHallInfo = $filteredHallInfo->reject(function ($hall_id) use ($booking_idsbooked) {
                    return $booking_idsbooked->contains($hall_id->id);
                });
                $discount_prices = []; // Array to store discount prices
                if ($allHallInfo->isEmpty()) {
                    return redirect()->back()->with('message', 'In this date, hall not available !!');
                } else {
                    foreach ($filteredHallInfo as $hall) {
                        if ($charity == 1) {
                            $discount_price = ($hall->price - ($hall->price * $hall->charity_discount) / 100);
                        } else {
                            $discount_price = $hall->price;; // No discount
                        }

                        $discount_prices[$hall->id] = $discount_price; // Store discount price for each hall
                    }

                    return view('backend.halllist', compact('allHallInfo', 'discount_prices', 'charity', 'numberOfDays', 'check_in_date_view','check_out_date_view','hall','start_time','end_time'));
                    }

            }
        else {

            return redirect()->back()->with('message', 'In this date, hall not available !!');
        }
    }


    public function store(Request $request)
    {
        try {
            $booking = new BookingManage();
            $booking->user_id = Auth::user()->id;
            $booking->hall_manage_id = $request->input('hall_manage_id');
            $booking->amount = $request->input('calculated_price');
            $booking->check_in_date = $request->input('check_in_date');
            $booking->check_out_date = $request->input('check_out_date');
            $booking->organization_type = ($request->input('charity') == 1) ? 'charity' : 'non-charity';
            $booking->start_time = $request->start_time;
            $booking->end_time = $request->end_time;
            $booking->booking_date = now();
            $booking->status = 'pending';
            $booking->save();

            $hall_id = $request->input('book_now');
            return redirect()->route('payment.index', ['hall_id' => $hall_id, 'booking_id' => $booking])->withMessage('Booking is Pending, Please Payment in 1 hour for confirmation');
        } catch (Exception $e) {
            return redirect()->back();
        }
        session_destroy();
    }

    public function halldetails($id, $price)
    {
        $hallmanage = HallManage::find($id);

        return view('backend.halldetails', compact('hallmanage', 'price'));
    }
    public function test()
    {


        return view('backend.test');
    }


    public function status_update()
    {
        $booking_idsbooked = BookingManage::where('status', 'booked')->pluck('id');
        foreach ($booking_idsbooked as $booking_id) {
            $payment_records = PaymentManage::where('booking_manage_id', $booking_id)
                ->where('status', 'paid')
                ->first();
            if (empty($payment_records)) {
                $updatebooking = BookingManage::find($booking_id);
                $updatebooking->status = 'available';
            } else {
                $updatebooking = BookingManage::find($payment_records->booking_manage_id);
                $check_in_date = $updatebooking->check_in_date;
                $check_out_date = $updatebooking->check_out_date;
                $in_time = $updatebooking->start_time;
                $out_time = $updatebooking->end_time;
               
                $current_date = now()->format('Y-m-d'); // Formats the current date as "YYYY-MM-DD"
                $current_time = now()->format('H:i:s'); // Formats the current time as "HH:MM:SS"

                $updatebooking = BookingManage::find($payment_records->booking_manage_id);

                $check_in_date = $updatebooking->check_in_date;
                $check_out_date = $updatebooking->check_out_date;
                if ($current_date >= $check_in_date && $current_date <= $check_out_date && $current_time > $out_time) {

                    $updatebooking->status = 'available';
                    $updatebooking->save();
                }
            }
        }


        $booking_idsavailable = BookingManage::where('status', 'available')->pluck('id');
        foreach ($booking_idsavailable as $booking_id) {
            $payment_records = PaymentManage::where('booking_manage_id', $booking_idsavailable)
                ->where('status', 'paid')
                ->first();
            if (empty($payment_records)) {
                $updatebooking = BookingManage::find($booking_id);
                $updatebooking->status = 'available';
            } else {
                $updatebooking = BookingManage::find($payment_records->booking_manage_id);
                $check_in_date = $updatebooking->check_in_date;
                $check_out_date = $updatebooking->check_out_date;
                $in_time = $updatebooking->start_time;
                $out_time = $updatebooking->end_time;
                $current_date = now()->format('Y-m-d'); // Formats the current date as "YYYY-MM-DD"
                $current_time = now()->format('H:i:s'); // Formats the current time as "HH:MM:SS"

                $updatebooking = BookingManage::find($payment_records->booking_manage_id);

                $check_in_date = $updatebooking->check_in_date;
                $check_out_date = $updatebooking->check_out_date;

                if ($current_date >= $check_in_date && $current_date <= $check_out_date && $current_time < $in_time) {

                    $updatebooking->status = 'booked';
                    $updatebooking->save();
                }
            }
        }
    }
    public function status_update_pending()
    {

        $booking_ids = BookingManage::where('status', 'pending')->pluck('id');
        foreach ($booking_ids as $booking_id) {
            $payment_records = PaymentManage::where('booking_manage_id', $booking_id)
                ->where('status', 'paid')
                ->first();
            if (empty($payment_records)) {
                $updatebooking = BookingManage::find($booking_id);
                $updatebooking->status = 'available';
            } else {
                $updatebooking = BookingManage::find($payment_records->booking_manage_id);
                $check_in_date = $updatebooking->check_in_date;
                $check_out_date = $updatebooking->check_out_date;
                $in_time = $updatebooking->start_time;
                $out_time = $updatebooking->end_time;
                $current_date = now()->format('Y-m-d'); // Formats the current date as "YYYY-MM-DD"
                $current_time = now()->format('H:i:s'); // Formats the current time as "HH:MM:SS"

                $updatebooking = BookingManage::find($payment_records->booking_manage_id);

                $check_in_date = $updatebooking->check_in_date;
                $check_out_date = $updatebooking->check_out_date;

                if ($current_date >= $check_in_date && $current_date <= $check_out_date && $current_time >= $in_time) {

                    $updatebooking->status = 'available';
                    $updatebooking->save();
                }
            }
        }
    }

    
    
}
