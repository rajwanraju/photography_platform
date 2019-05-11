<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Album;
use App\Image;

class ImageUploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        

        $albums = Album::where('userId',Auth::user()->id)->get();
        return view('images.upload',compact('albums'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        foreach ($request->photos as $photo) {
        $productImage = $photo;
        $name = $productImage->getClientOriginalName();
        $uploadPath = 'public/Image/';
        $productImage->move($uploadPath, $name);
        $imageUrl = $uploadPath . $name;


            Image::create([
                'title' => $request->title,
                'photographerId' => Auth::user()->id,
                'categoryId' => $request->categoryId,
                'albumId' => $request->albumId,
                'description' => $request->description,
                'image' => $imageUrl,
                'location' => $request->location,
            ]);
        }
     return redirect()->back()->with('message','Image Upload Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


public function myImages(){

$photographer = Auth::user()->id;

$images = Image::where('photographerId',$photographer)->get();


//dd($images);

return view('photographer.images.myImages',compact('images'));



}


}
