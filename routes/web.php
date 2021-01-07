<?php

use Illuminate\Support\Facades\Route;

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
//localhost:8000/
Route::get('/', function () {
    return view('welcome');
});

//localhost:8000/home

//required parameter
//example: ID 201512345
/*Route::get('/home/{id}/{name}', function ($id,$name) {
	return view('home',['studid' => $id, 'studname' => $name]);
});*/

//optional parameter
Route::get('/home/{id?}/{name?}', function ($id = "21",$name = "James Potter") {
	return view('home',['studid' => $id, 'studname' => $name]);
});

//localhost:8000/about
Route::get('/about', function () {
    return view('about');
});


//location:8000/contact
Route::get('/contact', function () {
   echo "<h1>Contact Page</h1>";
});


