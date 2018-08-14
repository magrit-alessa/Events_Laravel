<?php
use Illuminate\Http\Request;
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

Route::get('/', "EventsController@Events");

Route::get('/registration/{id}', "RegistrationController@RegistrationForm");

Route::post('/formdata', "RegistrationController@FormData");

Route::get('/visitors/{id}', "EventsController@Visitors");


