<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Route::get('/', function () {
    return view('frontEnd.homeContent.homeContent');
});

Route::post('/logout', 'Auth\LoginController@logout');

Route::get('/images', 'ImageUploadController@index');
Route::get('/category/{id}', 'ExtraController@index');
Route::get('/album/{id}', 'ExtraController@album');
Route::get('/published/albums', 'ExtraController@all_albums');
Route::post('/review_submit', 'ExtraController@review_submit');


//admin links
Route::group(['middleware'=>'role:admin'], function() {


    Route::get('/adminPage', 'AdminController@index');
    Route::get('/admin/notification/{id}', 'AdminController@get_notification');
    Route::get('/admin/notifications', 'AdminController@notifications');
    Route::get('/admin/user-approved/{id}', 'AdminController@user_approve');
    Route::get('/admin/reviews', 'AdminController@reviews');
    Route::get('/admin/review/published/{id}', 'AdminController@review_published');
    Route::get('/admin/review/unpublished/{id}', 'AdminController@review_unpublished');
    Route::get('/admin/album_view/{id}', 'AdminController@album_view');
    Route::get('/admin/album/published/{id}', 'AdminController@album_published');
    Route::get('/admin/album/unpublished/{id}', 'AdminController@album_unpublished');


Route::get('photographer', 'PhotographerController@index');
Route::get('photographer/create', 'PhotographerController@create');
Route::post('photographer/store', 'PhotographerController@store');

//user details

Route::get('userAlbums', 'AdminController@user_albums');
Route::get('userList', 'AdminController@userList');


 Route::resource('role', 'RoleController');


	      Route::get('roles/createRole', [
        'as' => 'createRole',
        'middleware'=>'role:admin',
        'uses' => 'RoleController@create']);



	      Route::get('roles/editRole', [
        'as' => 'editRole',
        'middleware'=>'role:admin',
        'uses' => 'RoleController@edit']);

});



Route::group(['middleware'=>'role:photographer'], function() {


Route::get('/photographerPage', 'Photographer@index');


});

Route::group(['middleware'=>'role:general-user'], function() {


Route::get('/myDashboard', 'UserController@index');
Route::get('/phptographer/apply/{id}', 'UserController@apply_phptographer');


});


Route::group(['middleware'=>'role:photographer||admin||general-user'], function() {
Route::resource('/myAlbum', 'AlbumController');
Route::get('/Upload/images', 'ImageUploadController@create');
Route::Post('/Upload/images', 'ImageUploadController@store')->name('image-Upload');
Route::get('/myImages', 'ImageUploadController@myImages');

Route::get('/myProfile', 'PhotographerProfileController@index');
Route::get('/completeProfile', 'PhotographerProfileController@create');
Route::post('/completeProfile', 'PhotographerProfileController@store');


});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
