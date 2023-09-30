<?php

namespace App\Http\Controllers;

use App\Models\ShiftsModel;
use Illuminate\Http\Request;
use Exception;

class ShiftController extends Controller
{
    public function index()
    {
        $shifts = ShiftsModel::latest()->get();
        return view('backend.shifts.index', compact('shifts'));
    }

    public function create()
    {
        return view('backend.shifts.create');
    }

    public function store(Request $request)
    {
        try {
            $newInTime = $request->input('in_time');
            $newOutTime = $request->input('out_time');
    
            // Check for conflicting shifts
            $conflictingShift = ShiftsModel::where(function ($query) use ($newInTime, $newOutTime) {
                $query->where(function ($subQuery) use ($newInTime, $newOutTime) {
                    $subQuery->where('in_time', '<', $newOutTime)
                             ->where('out_time', '>', $newInTime);
                });
            })->first();
    
            if ($conflictingShift) {
                return redirect()->back()->withError('Already use this time. Please choose a different time range.');
            }
    
            $shift = new ShiftsModel();
            $shift->name = $request->input('name');
            $shift->in_time = $newInTime;
            $shift->out_time = $newOutTime;
            $shift->save();
    
            return redirect()->route('shift.index')->withMessage('Shift Added');
        } catch (Exception $e) {
            return redirect()->back()->withError($e->getMessage());
        }
    }
    

    public function edit($id)
    {
        $shift = ShiftsModel::find($id);
        return view('backend.shifts.edit', compact('shift'));
    }

    public function update(Request $request, $id)
{
    try {
        $newInTime = $request->input('in_time');
        $newOutTime = $request->input('out_time');

        // Check for conflicting shifts except the current shift being updated
        $conflictingShift = ShiftsModel::where('id', '!=', $id)
            ->where(function ($query) use ($newInTime, $newOutTime) {
                $query->where(function ($subQuery) use ($newInTime, $newOutTime) {
                    $subQuery->where('in_time', '<', $newOutTime)
                             ->where('out_time', '>', $newInTime);
                });
            })->first();

        if ($conflictingShift) {
            return redirect()->back()->withError('Already use this time. Please choose a different time range.');
        }

        $shift = ShiftsModel::findOrFail($id);
        $shift->name = $request->input('name');
        $shift->in_time = $newInTime;
        $shift->out_time = $newOutTime;
        $shift->save();

        return redirect()->route('shift.index')->withMessage('Shift Updated');
    } catch (\Exception $e) {
        return redirect()->back()->withError($e->getMessage());
    }
}


    public function destroy($id)
    {
        try{
            $shift = ShiftsModel::findOrFail($id);
            $shift->forceDelete();
            return redirect()->route('shift.index')->withMessage('Shift Deleted');
        }catch(Exception $e){
            return redirect()->back()->withError($e->getMessage());
        }
    }
}
