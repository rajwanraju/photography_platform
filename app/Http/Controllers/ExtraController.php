<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;
use App\Album;
use App\Review;
use Auth;
use DB;

class ExtraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
      

        $categories = Image::where('categoryId',$id)->paginate(12);

       // dd($categories);

        return view('frontEnd.category.view',compact('categories'));
    }

public function all_albums(){

  $albums =  DB::table('albums')
        ->select('users.name','albums.*')
        ->join('users','albums.userId','users.id')
        ->where('albums.status',1)
        ->paginate(9);
        return view('frontEnd.album.all_albums',compact('albums'));

}

     public function album($id)
    {
        $reviews = DB::table('reviews')
        ->select('users.name','reviews.*')
        ->join('users','reviews.user_id','users.id')
        ->where('reviews.album_id',$id)
        ->where('reviews.status',1)
        ->get();
        $albums = Image::where('albumId',$id)->paginate(10);
        $album_info = Album::find($id);
        return view('frontEnd.album.view',compact('albums','album_info','reviews'));
    }

    public function review_submit(Request $request){

if(!empty($request)){
        $review = new Review();
        $review->title = $request->title;
        $review->comment = $request->comment;
        $review->album_id = $request->album_id;
        $review->user_id = Auth::user()->id;
        $review->status = 0;
        $review->save();
        return redirect()->back()->with('success','Review Post Successfully.');
    }
    else

         return redirect()->back()->with('error','SomeThing Went Wrong.');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
}
