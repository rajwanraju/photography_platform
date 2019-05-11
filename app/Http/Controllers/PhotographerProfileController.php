<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Profile;
use DB;

class PhotographerProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photographer = Auth::user()->id;
         $profile = DB::table('profiles')
                ->join('users', 'profiles.photographerId', '=', 'users.id')
                ->select('profiles.id', 'profiles.facebookId', 'profiles.instagramId', 'profiles.bio', 'profiles.image', 'profiles.location', 'users.name', 'users.email')
                ->where('profiles.photographerId', $photographer)
                ->first();

        return view('photographer.profile.index',compact('profile'));



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('photographer.profile.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $profileImage = $request->photo;
        $name = $profileImage->getClientOriginalName();
        $uploadPath = 'public/Image/';
        $profileImage->move($uploadPath, $name);
        $imageUrl = $uploadPath . $name;


            Profile::create([
                
                'photographerId' => Auth::user()->id,
                'facebookId' => $request->facebookId,
                'instagramId' => $request->instagramId,
                'bio' => $request->bio,
                'image' => $imageUrl,
                'location' => $request->location,
            ]);

             return redirect('/myProfile')->with('message','Profile Upload Successfully');
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
