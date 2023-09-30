<?php

namespace App\Http\Controllers;
use Exception;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\HallManage;
use App\Models\ShiftsModel;
use App\Models\BookingManage;
use Illuminate\Http\Request;

class BookingManageController extends Controller
{
    public function index()
    {
        $bookings = BookingManage::with('hallmanages')->latest()->get();
        $shifts = ShiftsModel::latest()->get();
        $hallManages = HallManage::latest()->get();
        $users = User::latest()->get();
        return view('backend.bookings.index', compact('bookings','shifts','hallManages','users'));
    }

    public function create()
    {
        $bookings = BookingManage::latest()->get();
        $shifts = ShiftsModel::latest()->get();
        $hallManages = HallManage::latest()->get();
        return view('backend.bookings.create', compact('bookings','shifts','hallManages'));
    }

    public function store(Request $request)
    {
        try {

            $selected_Shift = ShiftsModel::findOrFail( $request->input('shifts_model_id'));
            // Calculate the duration in hours
            $in_Time = new \DateTime($selected_Shift->in_time);
            $out_Time = new \DateTime($selected_Shift->out_time);

            $existingBooking = BookingManage::join('shifts_models', 'booking_manages.shifts_model_id', '=', 'shifts_models.id')
                ->where('booking_manages.hall_manage_id', $request->hall_manage_id)
                ->where('booking_manages.check_in_date', '<=', $request->input('check_out_date'))
                ->where('booking_manages.check_out_date', '>=', $request->input('check_in_date'))
                ->where('shifts_models.id', $request->input('shifts_model_id'))
                ->where('shifts_models.in_time', '<=', $in_Time)
                ->where('shifts_models.out_time', '>=', $out_Time)
                ->first();

            if ($existingBooking) {
                // A conflicting booking already exists
                return response()->json(['message' => 'The selected dates and times are not available.'], 422);
            }



            $booking = new BookingManage();
            $booking->user_id = Auth::user()->id;
            $booking->hall_manage_id = $request->hall_manage_id;
            $booking->check_in_date = $request->input('check_in_date');
            $booking->check_out_date = $request->input('check_out_date');
            $booking->organization_type = $request->input('organization_type');
            $booking->booking_date = now();
            $booking->shifts_model_id = $request->input('shifts_model_id');
            $booking->status = 'pending';

            $hall = HallManage::findOrFail($request->hall_manage_id);

            // Calculate the number of days
            $checkInDate = new \DateTime($booking->check_in_date);
            $checkOutDate = new \DateTime($booking->check_out_date);
            $numberOfDays = $checkInDate->diff($checkOutDate)->days;

            $selectedShift = ShiftsModel::findOrFail($booking->shifts_model_id);
            // Calculate the duration in hours
            $inTime = new \DateTime($selectedShift->in_time);
            $outTime = new \DateTime($selectedShift->out_time);
            $interval = $inTime->diff($outTime);
            $minutes = $interval->i;

            $pricePerDay = $hall->price; // Daily price
            $minutesInDay = 24 * 60; // Total minutes in a day

            $pricePerMinute = $pricePerDay / $minutesInDay;
            $totalPriceForMinutes = $pricePerMinute * $minutes;

            $days_and_hour= $numberOfDays * $totalPriceForMinutes;
            $totalPrice = $hall->price * $days_and_hour;

            if ($booking->organization_type == 1) {
                $charityDiscount = $hall->charity_discount;
                $discountedPrice = $totalPrice * (1 - ($charityDiscount / 100));
                $totalPrice = $discountedPrice;
            }
            $booking->amount = $totalPrice;

            $booking->save();
            return redirect()->route('booking.index')->withMessage('Booking is Pending, Pelase Payment in 1hour for confirmation');
        } catch (Exception $e) {
            return redirect()->back()->withError($e->getMessage());
        }
    }


    public function edit($id)
    {
        $booking = BookingManage::find($id);

        $hallManages = HallManage::latest()->get();
        return view('backend.bookings.index', compact('bookings','shifts','hallManages'));
        $bookings = BookingManage::latest()->get();
        $shifts = ShiftsModel::latest()->get();
        return view('backend.bookings.edit', compact('bookings','shifts','booking','hallManages'));

    }

    public function update(Request $request, $id)
{
    try {
        $booking = BookingManage::findOrFail($id);
        $booking->user_id = '1';
        $booking->hall_manage_id = $request->hall_manage_id;
        $booking->check_in_date = $request->input('check_in_date');
        $booking->check_out_date = $request->input('check_out_date');
        $booking->amount = $request->input('amount');
        $booking->organization_type = $request->input('organization_type');
        $booking->booking_date = now();
        $booking->shifts_model_id = $request->input('shifts_model_id');
        $booking->status = 'pending';
        $booking->save();

        return redirect()->route('shift.index')->withMessage('Shift Updated');
    } catch (\Exception $e) {
        return redirect()->back()->withError($e->getMessage());
    }
}


    public function destroy($id)
    {
        try{
            $booking = BookingManage::findOrFail($id);
            $booking->forceDelete();
            return redirect()->route('booking.index')->withMessage('Booking Deleted');
        }catch(Exception $e){
            return redirect()->back()->withError($e->getMessage());
        }
    }
}
