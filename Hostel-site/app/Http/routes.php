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
    return view('index');

});
Route::get('index', 'HomeController@index');


Route::get('Hostel', 'HostelController@index');
Route::get('Hostels/Zircon-A', 'HostelController@Zircon_A');
Route::get('Hostels/Zircon-B', 'HostelController@Zircon_B');
Route::get('Hostels/Zircon-C', 'HostelController@Zircon_C');


