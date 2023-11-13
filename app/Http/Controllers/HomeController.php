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
        $charity = $request->charity;
        $hall = $request->hall;
        $booked_date = $request->booked_date;
        $pending='pending';
        $booked='booked';
        $query = BookingManage::where('booking_manages.booked_date',  $request->input('booked_date'))
        ->where(function($query) use ($pending, $booked)
        {
            $query->where('booking_manages.status', $pending)
                  ->orWhere('booking_manages.status',$booked);
        });


        if ($request->hall != 0) {
            $query->where('booking_manages.hall_manage_id', $request->hall);
        }
        $existingBooking = $query->get();
        $bookingCount = $existingBooking->count();

        if ($request->hall != 0 && $bookingCount==0) {
            if ($charity == 1) {
                $hallInfo = HallManage::find($request->hall);
                $discount_price = ($hallInfo->price - ($hallInfo->price * $hallInfo->charity_discount) / 100);
            } else {
                $hallInfo = HallManage::find($request->hall);
                $discount_price = $hallInfo->price;
            }
        
            return view('backend.halllist', compact('hallInfo', 'discount_price', 'charity', 'booked_date','hall'));


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

                    return view('backend.halllist', compact('allHallInfo', 'discount_prices', 'charity', 'booked_date','hall'));
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
            $booking->booked_date = $request->input('booked_date');
            $booking->organization_type = ($request->input('charity') == 1) ? 'charity' : 'non-charity';
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
                $updatebooking->save();
            } else {
                $updatebooking = BookingManage::find($payment_records->booking_manage_id);
                $booked_date = $updatebooking->booked_date;
                $current_date = now()->format('Y-m-d'); 
                if ($current_date == $booked_date) {
                    $updatebooking->status = 'booked';
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
                $updatebooking->save();
            } else {
                $updatebooking = BookingManage::find($payment_records->booking_manage_id);
                $booked_date = $updatebooking->booked_date;
                $current_date = now()->format('Y-m-d'); 
                if ($current_date == $booked_date) {
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
                $updatebooking->save();
            } else {
                $updatebooking = BookingManage::find($payment_records->booking_manage_id);
                $booked_date = $updatebooking->booked_date;
                $current_date = now()->format('Y-m-d'); 
                if ($current_date == $booked_date) {
                    $updatebooking->status = 'booked';
                    $updatebooking->save();
                }
            }
        }
    }

}
