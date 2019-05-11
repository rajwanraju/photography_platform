<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;
use App\User;
use App\Image;
use App\Role;
use App\Review;
use Auth;
use DB;

class AdminController extends Controller
{
  public function index(){
$images=Image::take(4)->orderby('id','desc')->get();
 $albums =  DB::table('albums')
            ->take(3)
            ->inRandomOrder()
            ->get();
$image_count= Image::count();
$album_count= Album::count();
$photographer_count= User::whereHas('roles', function($q){$q->whereIn('roles.name', ['photographer']);})->count();
$pending_count= User::where('status',2)->count();
      return view('admin.home.homeContent',compact('image_count','album_count','photographer_count','pending_count','images','albums'));
 }
 public function user_albums(){

$albums =  DB::table('albums')
        ->select('users.name','albums.*')
        ->join('users','albums.userId','users.id')
        ->get();
return view('admin.user.albums',compact('albums'));


 }

 public function get_notification($id){

$user_data = DB::table('users')
            ->join('profiles', 'users.id', '=', 'profiles.photographerId')
            ->select('profiles.*','users.*' )
            ->where('users.id', $id)
            ->first();
$user_albums = Album::where('userId',$id)->orderby('id','desc')->take(3)->get();
$images = Image::where('photographerId',$id)->orderby('id','desc')->take(4)->get();
return view('admin.user.profileView',compact('user_data','user_albums','images'));

 }

public function user_approve($id){

$user_role = DB::table('role_user')->where('user_id',$id)->delete();
$user = User::find($id);
$user->status = 1;
$user->save();
$user->attachRole(Role::where('name','photographer')->first());
return redirect('/adminPage')->with('success','Photographer Request Has Been Approved');
}

public function reviews(){

$reviews = DB::table('reviews')
        ->select('users.name','reviews.*')
        ->join('users','reviews.user_id','users.id')
        ->get();
return view('admin.reviews.review',compact('reviews'));


}

public function review_unpublished($id){

	$review = Review::find($id);
	$review->status = 0;
	$review->save();
	return redirect()->back()->with('success','Review UnPublished');
}
public function review_published($id){

	$review = Review::find($id);
	$review->status = 1;
	$review->save();
	return redirect()->back()->with('success','Review Published');
}
public function album_view($id){

$albums = Image::where('albumId',$id)->paginate(10);
        $album_info = Album::find($id);
	return view('admin.album.view_album',compact('albums','album_info'));
}

public function album_unpublished($id){

	$album = Album::find($id);
	$album->status = 0;
	$album->save();
	return redirect()->back()->with('success','Album UnPublished');
}
public function album_published($id){

	$album = Album::find($id);
	$album->status = 1;
	$album->save();
	return redirect()->back()->with('success','Album Published');
}

}
