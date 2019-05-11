<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Schema;
use App\Image; 
use App\User; 
use App\Album; 
use App\Category; 
use App\Profile; 
use App\Review; 
use DB;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);


// image count
View::composer('frontEnd.homeContent.homeContent',function($view){
$images = Image::count();
$view->with('images',$images);
        });


// client count
View::composer('frontEnd.homeContent.homeContent',function($view){
$client =  User::whereHas('roles', function($q){$q->whereIn('roles.name', ['general-user']);})->count();
$view->with('client',$client);
        });

// photographer count
View::composer('frontEnd.homeContent.homeContent',function($view){
$photographer =  User::whereHas('roles', function($q){$q->whereIn('roles.name', ['photographer']);})->count();
$view->with('photographer',$photographer);
        });
// album count
View::composer('frontEnd.homeContent.homeContent',function($view){
$albums = Album::count();
$view->with('albums',$albums);
        });

// album's view

 View::composer('frontEnd.includes.protpholio',function($view){
$cate = Album::take(6)
            ->inRandomOrder()
            ->get();
 $count = Album::count();
$view->with(['cate'=>$cate,'count'=>$count]);
        });


// photographer's  view

View::composer('frontEnd.includes.members',function($view){
 $photographers =  DB::table('users')
            ->join('role_user', 'users.id', '=', 'role_user.user_id')
            ->join('profiles', 'users.id', '=', 'profiles.photographerId')
            ->select('profiles.*','users.*' )
            ->where('role_user.role_id', 3)
            ->take(4)
            ->inRandomOrder()
            ->get();

$view->with('photographers',$photographers);
        });

View::composer('frontEnd.includes.protpholio',function($view){
 $albums =  DB::table('albums')
            ->where('status', 1)
            ->take(4)
            ->inRandomOrder()
            ->get();

$view->with('albums',$albums);
        });


View::composer('admin.includes.navbar',function($view){
    $count =  User::where('status',2)->count();
    $reviews  =  Review::where('status',0)->count();
    $count = $count + $reviews;
    $view->with('count',$count);
        });

    View::composer('admin.includes.navbar',function($view){
    $notifications  =  User::where('status',2)->get();
    $view->with('notifications',$notifications);
        }); 

          View::composer('admin.includes.navbar',function($view){
    $reviews  =  Review::where('status',0)->get();
    $view->with('reviews',$reviews);
        }); 

          View::composer('frontEnd.includes.passion',function($view){
    // $images  =  Image::take(9)->get();
    $images  =  Image::take(9)->inRandomOrder()->get();
    // dd($images);
    $view->with('images',$images);
        });

           View::composer('frontEnd.includes.testimonial',function($view){
    $reviews  =   DB::table('reviews')
        ->select('users.name','reviews.*')
        ->join('users','reviews.user_id','users.id')
        ->where('reviews.status',1)
        ->get();
    $view->with('reviews',$reviews);
        });


    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
