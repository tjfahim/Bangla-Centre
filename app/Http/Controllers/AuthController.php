<?php

namespace App\Http\Controllers;

use App\Models\HallManage;
use App\Models\ShiftsModel;
use App\Models\BookingManage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use App\Models\User;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function userLoginget(Request $request,$hall, $checkin, $checkout, $shift, $charity){

        return view('backend.bookings.login', compact('hall', 'checkin', 'checkout', 'shift', 'charity'));

    }

    public function userLogin(Request $request){

        $hall= $request->hall;
        $checkin= $request->checkin;
        $checkout= $request->checkout;
        $shift= $request->shift;
        $charity= $request->charity;

        if($request->isMethod('post')){

            $credentials = $request->only('email', 'password');

            $user = User::where('email', $credentials['email'])->first();

            if (!$user) {
                return redirect()->back()->withInput()->withErrors(['email' => 'Email not found']);
            }

            if (Hash::check($credentials['password'], $user->password)) {
                Auth::login($user);
                
                $charity = $charity;
                $shift = $shift;
                $selected_Shift = ShiftsModel::findOrFail($shift);
                // Calculate the duration in hours
                $in_Time = new \DateTime($selected_Shift->in_time);
                $out_Time = new \DateTime($selected_Shift->out_time);

                if (strtotime($checkin) > strtotime($checkout)) {
                    return redirect()->back()->with('message', 'Invalid date selection. Check-in date cannot be greater than check-out date.');

                }

                $query = BookingManage::where('booking_manages.check_in_date', '<=', $checkout)
                ->where('booking_manages.check_out_date', '>=', $checkin)
                ->where(['shifts_model_id' => $shift]);

                if ($hall != 0) {
                    $query->where('booking_manages.hall_manage_id', $hall);
                }

                $existingBooking = $query->get();

                $bookingCount = $existingBooking->count();

                $check_in_date_view = $checkin;
                $check_out_date_view = $checkout;
                $shift_view = $shift;

                $checkInDate = new \DateTime($checkin);
                $checkOutDate = new \DateTime($checkout);
                $numberOfDays = $checkInDate->diff($checkOutDate)->days;
                $numberOfDays = $numberOfDays + 1;


                if ($request->hall != 0 && $bookingCount==0) {

                    if ($charity == 1) {
                        $hallInfo = HallManage::find($hall);
                        $discount_price = ($hallInfo->price - ($hallInfo->price * $hallInfo->charity_discount) / 100);
                    } else {
                        $hallInfo = HallManage::find($hall);
                        $discount_price = $hallInfo->price;
                    }


                    return view('backend.halllist', compact('hallInfo', 'discount_price', 'numberOfDays', 'charity', 'check_in_date_view', 'check_out_date_view', 'shift_view'));


                    } else if ($hall == 0 ) {

                    $booking_idsbooked = $existingBooking->pluck('hall_manage_id');
                    $filteredHallInfo = HallManage::all();
                    $allHallInfo = $filteredHallInfo->reject(function ($hall_id) use ($booking_idsbooked) {
                        return $booking_idsbooked->contains($hall_id->id);
                    });
                    $discount_prices = []; // Array to store discount prices
                    if ($allHallInfo->isEmpty()) {
                        return redirect()->back()->with('message', 'In this date and shift hall not available !!');
                    } 
                    else {
                        foreach ($filteredHallInfo as $hall) {
                            if ($charity == 1) {
                                $discount_price = ($hall->price - ($hall->price * $hall->charity_discount) / 100);
                            } else {
                                $discount_price = $hall->price;; // No discount
                            }

                            $discount_prices[$hall->id] = $discount_price; // Store discount price for each hall
                        }

                                 return view('backend.halllist', compact('allHallInfo', 'discount_prices', 'charity', 'numberOfDays', 'check_in_date_view','check_out_date_view', 'shift_view'));
                            }

            }
            else {

                return redirect()->back()->with('message', 'In this date and shift hall not available !!');
            
                    }
                }
                // Wrong password
                return redirect()->back()->withInput()->withErrors(['password' => 'Wrong password']);
        }
        
        
        return view('backend.bookings.login');
    }


    public function login(Request $request){

        return view('login');

    }

    public function showForgotPasswordForm()
    {
        return view('auth.passwords.email');
    }

    // Send reset password link
    public function sendResetLinkEmail(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $status = Password::sendResetLink($request->only('email'));

        return $status === Password::RESET_LINK_SENT
            ? back()->with(['status' => __($status)])
            : back()->withErrors(['email' => __($status)]);
    }

    // Show the reset password form
    public function showResetPasswordForm(Request $request, $token)
    {
        return view('auth.passwords.reset', ['token' => $token, 'email' => $request->email]);
    }

    // Reset the user's password
    public function reset(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:8',
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->forceFill(['password' => bcrypt($password)])->save();
            }
        );

        return $status == Password::PASSWORD_RESET
            ? redirect()->route('login')->with('status', __($status))
            : back()->withErrors(['email' => __($status)]);
    }

}
