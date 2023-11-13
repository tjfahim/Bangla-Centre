<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\HallManage;
use Illuminate\Http\Request;
use App\Models\PaymentManage;
use Illuminate\Support\Facades\Auth;

class PaymentManageController extends Controller
{
    public function index(){
        $paymentmanages = PaymentManage::all();
        $hallManages = HallManage::latest()->get();
        $users = User::latest()->get();
        return view('backend.payments.index', compact('paymentmanages', 'hallManages', 'users'));
    }
 
}
