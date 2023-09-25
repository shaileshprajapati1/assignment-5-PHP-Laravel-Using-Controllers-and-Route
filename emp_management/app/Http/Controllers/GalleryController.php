<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Validator;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Gallery $gallery)
    {
        $allphotos = $gallery->all();
        // dd($allphotos);
        return view("admin\alliamges",compact('allphotos'));
    }
    public function homeindex(Gallery $gallery)
    {
        // dd("call");
        $allphotos = $gallery->all();
        // dd($allphotos);
        return view("/gallery",compact('allphotos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin/addimages");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Gallery $gallery)
    {
       
       
        $rules = array(
            'Images' => 'mimes:jpeg,jpg,png,gif|required|max:10000',
        );
        $validator = Validator::make($request->all(), $rules);
        // dd($validator);
        if ($validator->fails()) {
            return Redirect('admin/addimages')
                ->withErrors($validator)
                ->withInput();
        } else {
            
            $imageNames = time() . '.' . $request->Images->getClientOriginalExtension();
            $request->Images->move(public_path('/Allphotos'), $imageNames);

            $gallery->Images = $imageNames;
            $gallery->save();
            return redirect("admin/viewphotos");
        }
    }
    /**
     * Display the specified resource.
     */
    public function show(Gallery $gallery)
    {
       //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gallery $gallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gallery $gallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($pid,Gallery $gallery)
    {
      $gallerys = $gallery::find($pid);
      
      $gallerys->delete();

      return redirect("admin/viewphotos");

    }
}
