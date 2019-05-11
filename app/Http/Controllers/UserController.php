<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Image;
use Auth;
class UserController extends Controller
{
    public function index(){

    	
    	$role = (User::find(Auth::user()->id)->roles->first()->name);
    	$images = Image::where('photographerId',Auth::user()->id)->orderby('id','desc')->take(3)->get();
    	return view('admin.home.homeContent',compact('images','role'));
    }


    public function apply_phptographer($id){

$user_status = User::find($id);
$user_status->status = 2;
$user_status->save();

return redirect('/myDashboard')->with('success','Photographer Request Has Been Send');


    }
}
