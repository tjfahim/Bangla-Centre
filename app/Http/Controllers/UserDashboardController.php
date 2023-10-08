<?php

namespace App\Http\Controllers;

use App\Models\BookingManage;
use App\Models\HallManage;
use App\Models\PaymentManage;
use Illuminate\Support\Facades\Auth;

session_start();

class UserDashboardController extends Controller
{
    public function user_dashboard()
    {
        if (Auth::check()) {
            $userId = Auth::user()->id;
            $paymentmanages = PaymentManage::where('user_id', $userId)->paginate(10);

            return view('backend.payments.indexUser', compact('paymentmanages'));
        }
    }

    public function payment_details($id)
    {
        if (Auth::check()) {
            $paymentmanage = PaymentManage::findorfail($id);
            $bookingmanage = BookingManage::findorfail($paymentmanage->booking_manage_id);
            $HallManage = HallManage::findorfail($bookingmanage->hall_manage_id);
            return view('backend.payments.detailsUser', compact('paymentmanage', 'bookingmanage', 'HallManage'));
        }
    }
    public function booking_list()
    {
        if (Auth::check()) {
            $userId = Auth::id(); // Get the authenticated user's ID

            $bookingmanages = BookingManage::where('user_id', $userId)->where('status', 'pending')->paginate(10);


            return view('backend.bookings.indexUser', compact('bookingmanages'));
        }
    }
     public function booking_details($id)
    {
        if (Auth::check()) {
            $bookingmanage = BookingManage::findorfail($id);
            $hall_id = $bookingmanage->hall_manage_id;
            return redirect()->route('payment.index', ['hall_id' => $hall_id, 'booking_id' => $bookingmanage->id]);


        }
    }
}
