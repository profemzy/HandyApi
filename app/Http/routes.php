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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::resource('members','MemberController', ['except' => ['create', 'edit'] ]);
Route::resource('bookings','BookingController', ['except' => ['create', 'edit'] ]);
Route::resource('companies','CompanyController', ['except' => ['create', 'edit'] ]);

Route::resource('members.bookings','MemberBookingsController', ['except' => ['create', 'edit'] ]);
Route::resource('members.companies','MemberCompaniesController', ['except' => ['create', 'edit'] ]);