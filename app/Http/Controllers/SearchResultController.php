<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\SearchPage;
use Illuminate\Http\Request;
use App\Http\Requests\FindHallRequest;
use App\Models\BookingManage;
use App\Models\ShiftsModel;

class SearchResultController extends Controller
{
    public function index(FindHallRequest $request)
    {

        $charity = $request->input('charity');
        $selected_Shift = ShiftsModel::findOrFail( $request->input('shift'));
        // Calculate the duration in hours
        $in_Time = new \DateTime($selected_Shift->in_time);
        $out_Time = new \DateTime($selected_Shift->out_time);
        
        $existingBooking = BookingManage::join('shifts_models', 'booking_manages.shifts_model_id', '=', 'shifts_models.id')
            ->where('booking_manages.hall_manage_id', $request->hall)
            ->where('booking_manages.check_in_date', '<=', $request->input('check_out_date'))
            ->where('booking_manages.check_out_date', '>=', $request->input('check_in_date'))
            ->where('shifts_models.id', $request->input('shifts_model_id'))
            ->where('shifts_models.in_time', '<=', $in_Time)
            ->where('shifts_models.out_time', '>=', $out_Time)
            ->get();

        return $existingBooking;
    }
}
