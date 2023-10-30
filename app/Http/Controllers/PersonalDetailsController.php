<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\PersonalDetails;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\PersonalDetailsRequest;

class PersonalDetailsController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('backend.personaldetails.index', compact('users'));
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('backend.personaldetails.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        try{
            $data = $request->except('_token');
            User::where('id',$id)->update($data);
            return redirect()->route('person.index')->withMessage('Personal Details Updated');
        }catch(Exception $e){
            return redirect()->back()->withError($e->getMessage());
        }
    }

    public function destroy($id)
    {
        try{
            $user = User::find($id);
            $user->delete();
            return redirect()->route('person.index')->withMessage('User Deleted Successfully');
        }catch(Exception $e){
            return redirect()->back()->withError($e->getMessage());
        }
    }
}
