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


Route::get('/', 'HomeController@index');
Route::get('login', 'HomeController@login');
Route::get('logout', 'HomeController@logout');
Route::post('auth', 'HomeController@auth');
Route::get('admin/show', 'HomeController@show');
Route::post('get_complaint','HomeController@get_complaint');
Route::post('/modify_complaint_status','HomeController@modify_complaint_status');
/*Route::group(['middleware' => 'adminauth'], function () {
//any pages oly visible by admin
});
*/

Route::get('contacts','HomeController@contacts_info');

Route::resource('h_incharge', 'H_InchargeController');


Route::get('hostels', 'HostelController@index');
Route::get('hostels/show', 'HostelController@show');
Route::get('hostels/create', 'HostelController@create');
Route::post('hostels/create', 'HostelController@store');
Route::get('hostels/{hostel_name}', 'HostelController@hostelhome');
Route::get('hostels/{hostel_name}/edit', 'HostelController@hosteledit');
Route::post('hostels/{hostel_name}/update', 'HostelController@hostelupdate');
Route::get('hostels/{hostel_name}/gallery', 'HostelController@hostelgallery');

Route::resource('m_incharge', 'M_InchargeController');

Route::get('mess', 'MessController@index');
Route::get('mess/show', 'MessController@show');
Route::get('mess/create', 'MessController@create');
Route::post('mess/create', 'MessController@store');
Route::get('mess/feedback','MessController@feedback');
Route::post('mess/feedback','MessController@store_feedback');
Route::get('mess/{mess_name}', 'MessController@messhome');
Route::get('mess/{mess_name}/edit', 'MessController@messedit');
Route::post('mess/{mess_name}/update', 'MessController@messupdate');

Route::get('complaints', 'HomeController@complaint');
Route::post('complaints/submit', 'HomeController@complaint_submit');
Route::get('complaints/view', 'HomeController@show');
