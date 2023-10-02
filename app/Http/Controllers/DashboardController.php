<?php

namespace App\Http\Controllers;

use App\Models\BookingManage;
use Exception;
use App\Models\User;
use App\Models\Dashboard;
use App\Models\HallManage;
use App\Models\PaymentManage;
use Illuminate\Http\Request;
use App\Models\PersonalDetails;
use App\Models\ShiftsModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

session_start();

class DashboardController extends Controller
{
    public function index()
    {
        $dashboards = Session::get('dashboards');
        $totalShifts = ShiftsModel::count();
        $totalUsers = User::count();
        $totalHalls = HallManage::count();
        $totalBookings = BookingManage::count();
        $totalPayments = PaymentManage::count();


        $userId = Auth::id(); // Get the authenticated user's ID

        $booking_pending = BookingManage::where('user_id', $userId)
        ->where('status', 'pending')
        ->count();
        $totalPaymentuser = PaymentManage::where('user_id', $userId)->count();

        return view('backend.dashboard2', compact('dashboards', 'totalShifts', 'totalUsers', 'totalHalls', 'totalBookings', 'totalPayments','booking_pending','totalPaymentuser'));
    }

    public function edit($id)
    {
        $dashboard = Dashboard::find($id);
        return view('backend.dashboards.edit', compact('dashboard'));
    }

    public function update(Request $request, $id)
    {
        try{
            $data = $request->except('_token');
            if($request->hasFile('image')){
                $previousImage = Dashboard::find($id)->image;
                $this->unlink($previousImage);
                $data['image'] = $this->uploadImage($request->image);
            }
            Dashboard::where('id',$id)->update($data);
            return redirect()->route('admin.index')->withMessage('Booking Updated');
        }catch(Exception $e){
            return redirect()->back()->withError($e->getMessage());
        }
    }

    private function unlink($file)
    {
        $pathToUpload = storage_path().'/app/public/searchpage/';
        if($file != '' && file_exists($pathToUpload.$file)){
            @unlink($pathToUpload.$file);
        }
    }

    public function destroy($id)
    {
        try{
            $dashboard = Dashboard::find($id);
            $dashboard->delete();
            return redirect()->route('admin.index')->withMessage('Booking Deleted');
        }catch(Exception $e){
            return redirect()->back()->withError($e->getMessage());
        }
    }

    public function show($id)
    {
        $dashboard = Dashboard::find($id);
        return view('backend.dashboards.show',compact('dashboard'));
    }
}
