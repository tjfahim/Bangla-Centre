<?php

namespace App\Http\Controllers;
use Exception;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\HallManage;
use App\Models\BookingManage;
use Illuminate\Http\Request;

class BookingManageController extends Controller
{
    public function index()
    {
        $bookings = BookingManage::with('hallmanages')->latest()->get();
        $hallManages = HallManage::latest()->get();
        $users = User::latest()->get();
        return view('backend.bookings.index', compact('bookings','hallManages','users'));
    }


    public function create()
    {
        $bookings = BookingManage::latest()->get();
        $hallManages = HallManage::latest()->get();
        return view('backend.bookings.create', compact('bookings','hallManages'));
    }

    public function store(Request $request)
    {
       
    }


    public function edit($id)
    {


    }

    public function update(Request $request, $id)
{

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
