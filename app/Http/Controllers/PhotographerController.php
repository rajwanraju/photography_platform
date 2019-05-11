<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;

class PhotographerController extends Controller
{
    public function index(){



    $photographers =  User::whereHas('roles', function($q){$q->whereIn('roles.name', ['photographer']);})->get();

return view('admin.user.index',compact('photographers'));


    }


public function create(){


return view('admin.user.create');

}

public function store(Request $request){

        $photographers = new User();
        $photographers->name = $request['name'];
        $photographers->email = $request['email'];
        $photographers->password = bcrypt( $request['password']);
        $photographers->save();
        $photographers->roles()->attach(Role::where('name', 'photographer')->first());

        return redirect('/photographer')->with('message','Photographer Register Successfully');

}




}
