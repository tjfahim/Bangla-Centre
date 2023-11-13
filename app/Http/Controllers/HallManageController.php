<?php

namespace App\Http\Controllers;

use App\Models\HallManage;
use Illuminate\Http\Request;
use Exception;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;

class HallManageController extends Controller
{
    public function index()
    {
        $halls = HallManage::latest()->get();
        return view('backend.hallManage.index', compact('halls'));
    }

    public function create()
    {
        return view('backend.hallManage.create');
    }

    public function store(Request $request)
    {
        try {
        $hall = new HallManage();

        if ($request->hasFile('image')) {
            $uploadedFile = $request->file('image');
            $path = public_path('uploads/images');
            $fileName = time() . '_' . $uploadedFile->getClientOriginalName();
            $uploadedFile->move($path, $fileName);
            $hall->image=  $fileName ;
        }
        $hall->hall_name = $request->input('hall_name');
        $hall->hall_description = $request->input('hall_description');
        $hall->capacity = $request->input('capacity');
        $hall->price = $request->input('price');
        $hall->charity_discount = $request->input('charity_discount');
        $hall->status = 'available';
        $hall->save();
            return redirect()->route('hall_manage.index')->withMessage('Hall Added');
        } 
        catch (Exception $e) {
            return redirect()->back()->withError($e->getMessage());
        }
    }

    public function edit($id)
    {
        $hall = HallManage::find($id);
        return view('backend.hallManage.edit', compact('hall'));
    }

    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validate image type and size
                'hall_name' => 'required|string|max:255',
                'price' => 'required|numeric',
                'charity_discount' => 'required|numeric',
                'capacity' => 'required|numeric',
            ]);
            $hall = HallManage::findOrFail($id);
            if ($request->has('delete_image')) {
                // Delete the old image if it exists
                File::delete(public_path('public/uploads/images/' . $hall->image));
                $hall->image = null; // Set the image field to null
            }
            if ($request->hasFile('image')) {
                // Delete the old image if it exists
                File::delete(public_path('public/uploads/images/' . $hall->image));
                $uploadedFile = $request->file('image');
                $fileName = time() . '_' . $uploadedFile->getClientOriginalName();
                $path = public_path('uploads/images');
                $uploadedFile->move($path, $fileName);
        
                $hall->image=  $fileName ;
        
            }
            $hall->hall_name = $request->input('hall_name');
            $hall->hall_description = $request->input('hall_description');
            $hall->capacity = $request->input('capacity');
            $hall->price = $request->input('price');
            $hall->charity_discount = $request->input('charity_discount');
            $hall->status ='available';
            $hall->save();
            return redirect()->route('hall_manage.index')->withMessage('Hall Updated');
        } catch (\Exception $e) {
            return redirect()->back()->withError($e->getMessage());
        }
    }

    public function destroy($id)
    {
        try{
            $hall = HallManage::findOrFail($id);
            $hall->forceDelete();
            return redirect()->route('hall_manage.index')->withMessage('Hall Deleted');
        }catch(Exception $e){
            return redirect()->back()->withError($e->getMessage());
        }
    }
   
}
