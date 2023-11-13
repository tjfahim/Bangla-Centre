<?php

namespace App\Http\Controllers;

use App\Models\HallManage;
use App\Models\BookingManage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Rules\ReCaptcha;
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
                return back()->withInput()->withErrors(['password' => 'Password Not Match']);
            }
            
            return back()->withInput()->withErrors(['email' => 'Email Not Found']);
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
            'post_code' => 'required',
            'password' => 'required|min:6',
            'g-recaptcha-response' => ['required', new ReCaptcha],
        ], [
            'g-recaptcha-response.required' => 'Please complete the reCAPTCHA verification.',
        ]);

      
        $user = new User();
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->phone = $validatedData['phone']; 
        $user->post_code = $validatedData['post_code']; 
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


        public function zipCodeToMapAddress($zipCode)
        {
           
            $apiKey = 'AIzaSyC7lx7bebA7tdsmUW2p-7k5z1yx9na7bAw';
            $url = "https://maps.googleapis.com/maps/api/geocode/json?address={$zipCode}&key={$apiKey}";
            $client = new \GuzzleHttp\Client();
            $response = $client->get($url);
            $data = json_decode($response->getBody(), true);
        
            // Check if the API request was successful
            if ($data['status'] === 'OK') {
                // Get the latitude and longitude
                $latitude = $data['results'][0]['geometry']['location']['lat'];
                $longitude = $data['results'][0]['geometry']['location']['lng'];
                $fullAddress = $data['results'][0]['formatted_address'];
                return response()->json([
                    'latitude' => $latitude,
                    'longitude' => $longitude,
                    'full_address' => $fullAddress,
                ]);
            } else {
                return response()->json(['error' => 'Invalid Post code']);
            }
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
                    'post_code' => 'required',
                ]);
                $user->name = $validatedData['name'];
                $user->email = $validatedData['email'];
                $user->phone = $validatedData['phone'];
                $user->address = $validatedData['address'];
                $user->date_of_birth = $validatedData['date_of_birth'];
                $user->post_code = $validatedData['post_code'];
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
