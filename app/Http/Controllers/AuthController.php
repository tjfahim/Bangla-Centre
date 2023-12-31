<?php

namespace App\Http\Controllers;

use App\Models\HallManage;
use App\Models\BookingManage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function userLoginget(Request $request,$hall, $booked_date, $charity){

        return view('backend.bookings.login', compact('hall', 'booked_date', 'charity'));

    }
    public function login_new(){

        return view('backend.bookings.login');

    }

    public function userLogin(Request $request){

        $hall= $request->hall;
        $booked_date= $request->booked_date;
        $charity= $request->charity;

        if($request->isMethod('post')){

            $credentials = $request->only('email', 'password');

            $user = User::where('email', $credentials['email'])->first();

            if (!$user) {
                return redirect()->back()->withInput()->withErrors(['email' => 'Email not found']);
            }
            if ($user->role === 'admin') {
                return redirect()->back()->withInput()->withErrors(['email' => 'This account cannot have access to book']);
            }
            if (Hash::check($credentials['password'], $user->password)) {
                Auth::login($user);

                $query = BookingManage::where('booking_manages.booked_date',  $booked_date);

                if ($hall != 0) {
                    $query->where('booking_manages.hall_manage_id', $hall);
                }

                $existingBooking = $query->get();

                $bookingCount = $existingBooking->count();


                if ($request->hall != 0 && $bookingCount==0) {
                    if ($charity == 1) {
                        $hallInfo = HallManage::find($hall);
                        $discount_price = ($hallInfo->price - ($hallInfo->price * $hallInfo->charity_discount) / 100);
                    } else {
                        $hallInfo = HallManage::find($hall);
                        $discount_price = $hallInfo->price;
                    }

                    return view('backend.halllist', compact('hallInfo', 'discount_price', 'charity', 'booked_date'));

                    } else if ($hall == 0 ) {

                    $booking_idsbooked = $existingBooking->pluck('hall_manage_id');
                    $filteredHallInfo = HallManage::all();
                    $allHallInfo = $filteredHallInfo->reject(function ($hall_id) use ($booking_idsbooked) {
                        return $booking_idsbooked->contains($hall_id->id);
                    });
                    $discount_prices = []; // Array to store discount prices
                    if ($allHallInfo->isEmpty()) {
                        return redirect()->back()->with('message', 'In this date, hall not available !!');
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
                                 return view('backend.halllist', compact('allHallInfo', 'discount_prices', 'charity', 'booked_date'));
                            }
            }
            else {

                return redirect()->back()->with('message', 'In this date, hall not available !!');
            
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
    public function login_submit(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');

        if (auth()->attempt($credentials)) {
            return redirect()->route('admin.index');
        } else {
            // Check if the email is correct but the password is wrong
            $user = User::where('email', $request->email)->first();
            if ($user && !Hash::check($request->password, $user->password)) {
                return back()->withInput()->withErrors(['password' => 'Invalid password']);
            }
            
            return back()->withInput()->withErrors(['email' => 'Invalid Email']);
        }
    }
    


    public function register(){
        return view('registration');
    }


    public function register_submit(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'required|string|max:255',
            'address' => 'string|max:255',
            'date_of_birth' => 'date|max:255',
            'password' => 'required|min:6',
        ]);
        $user = new User();
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->phone = $validatedData['phone']; 
        $user->address = $validatedData['address']; 
        $user->date_of_birth = $validatedData['date_of_birth']; 
        $user->password = bcrypt($validatedData['password']);
        $user->role = 'user';
        $user->save();

        return redirect()->route('login')->with('success', 'Registration successful! Please log in.');
        }

        public function logout(Request $request)
        {
            Auth::logout();
        
            $request->session()->invalidate();
        
            return redirect('/');
        }



        public function updateProfile(Request $request)
            {
                $user = auth()->user();

                $validatedData = $request->validate([
                    'name' => 'required|string|max:255',
                    'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
                    'phone' => 'required|string|max:255',
                    'address' => 'string|max:255',
                    'date_of_birth' => 'string|max:255',
                ]);

                $user->name = $validatedData['name'];
                $user->email = $validatedData['email'];
                $user->phone = $validatedData['phone'];
                $user->address = $validatedData['address'];
                $user->date_of_birth = $validatedData['date_of_birth'];
                $user->save();

                return redirect()->back()->with('success', 'Profile updated successfully');
        }

        public function updatePassword(Request $request)
        {
            // Validate the user input
            $request->validate([
                'old_password' => 'required',
                'new_password' => 'required|min:6|confirmed',
            ]);

            // Get the authenticated user
            $user = auth()->user();

           
            if (!Hash::check($request->old_password, $user->password)) {
                return redirect()->back()->withErrors(['old_password' => 'The old password is incorrect']);
            }

            // Update the user's password
            $user->password = bcrypt($request->new_password);
            $user->save();
            return redirect()->back()->with('password_success', 'Password changed successfully');

        }


}
