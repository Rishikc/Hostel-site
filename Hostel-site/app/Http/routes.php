<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('base');

});
Route::get('index', 'HomeController@index');
Route::get('login', 'HomeController@login');
Route::get('logout', 'HomeController@logout');
Route::post('auth', 'HomeController@auth');

/*Route::group(['middleware' => 'adminauth'], function () {
//any pages oly visible by admin
});
*/
Route::get('hostels', 'HostelController@index');
Route::get('hostels/create', 'HostelController@create');
Route::post('hostels/create', 'HostelController@store');
Route::get('hostels/{hostel_name}', 'HostelController@hostelhome');
Route::get('hostels/{hostel_name}/edit', 'HostelController@hosteledit');
Route::post('hostels/{hostel_name}/update', 'HostelController@hostelupdate');
Route::get('hostels/{hostel_name}/gallery', 'HostelController@hostelgallery');
Route::get('hostels/{hostel_name}/complaint', 'HostelController@hostelcomplaint');
Route::post('hostels/{hostel_name}/complaint/submit', 'HostelController@hostelcomplaint_submit');


Route::get('mess', 'MessController@index');
Route::get('mess/{mess_name}', 'MessController@messhome');
Route::get('mess/{mess_name}/edit', 'MessController@messedit');
Route::post('mess/{mess_name}/update', 'MessController@messupdate');
// Route::get('hostels/zircon-a', 'HostelController@Zircon_A');
// Route::get('hostels/zircon-a/council', 'HostelController@Zircon_A_council');
// Route::get('hostels/zircon-a/gallery', 'HostelController@Zircon_A_gallery');


// Route::get('hostels/zircon-b', 'HostelController@Zircon_B');
// Route::get('hostels/zircon-b/council', 'HostelController@Zircon_B_council');
// Route::get('hostels/zircon-b/gallery', 'HostelController@Zircon_B_gallery');

// Route::get('hostels/zircon-c', 'HostelController@Zircon_C');
// Route::get('hostels/zircon-c/council', 'HostelController@Zircon_C_council');
// Route::get('hostels/zircon-c/gallery', 'HostelController@Zircon_C_gallery');

