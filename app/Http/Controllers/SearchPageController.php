<?php

namespace App\Http\Controllers;

use Exception;
use Carbon\Carbon;
use App\Models\SearchPage;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Http\Requests\SearchPageRequest;


class SearchPageController extends Controller
{
    public function index()
    {
        $searchpages = SearchPage::all();

        return view('backend.searchpage.index', compact('searchpages'));
    }

    public function create()
    {
        return view('backend.searchpage.create');
    }

    public function store(SearchPageRequest $request)
    {
        try {
            if ($request->hasFile('image')) {
                $image = $this->uploadImage($request->image);
            }
            SearchPage::create([
                'booked_date' => $request->booked_date,
                'hall' => $request->hall,
                'period' => $request->period,
                'booking_type' => $request->booking_type,
                'price' => $request->price,
                'description' => $request->description,
                'image' => $image,
                'discount' => $request->discount,
            ]);
            return redirect()->route('searchpage.index')->withMessage('Hall Added');
        } catch (Exception $e) {
            return redirect()->back()->withError($e->getMessage());
        }
    }

    public function edit($id)
    {
        $searchpage = SearchPage::find($id);
        return view('backend.searchpage.edit', compact('searchpage'));
    }

    public function update(Request $request, $id)
    {
        try{
            $data = $request->except('_token');
            if($request->hasFile('image')){
                $previousImage = SearchPage::find($id)->image;
                $this->unlink($previousImage);
                $data['image'] = $this->uploadImage($request->image);
            }
            SearchPage::where('id',$id)->update($data);
            return redirect()->route('searchpage.index')->withMessage('Hall Updated');
        }catch(Exception $e){
            return redirect()->back()->withError($e->getMessage());
        }
    }

    public function destroy($id)
    {
        try{
            $searchpage = SearchPage::find($id);
            $searchpage->delete();
            return redirect()->route('searchpage.index')->withMessage('Hall Deleted');
        }catch(Exception $e){
            return redirect()->back()->withError($e->getMessage());
        }
    }

    public function uploadImage($file)
    {
        $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());

        $file_name = $timestamp . '.' . $file->getClientOriginalExtension();

        $pathToUpload = storage_path() . '/app/public/searchpage/';

        if (!is_dir($pathToUpload)) {
            mkdir($pathToUpload, 0755, true);
        }

        Image::make($file)->resize(634, 792)->save($pathToUpload . $file_name);
        return $file_name;
    }

    private function unlink($file)
    {
        $pathToUpload = storage_path().'/app/public/searchpage/';
        if($file != '' && file_exists($pathToUpload.$file)){
            @unlink($pathToUpload.$file);
        }
    }
}
