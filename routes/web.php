<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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
/*Route::get('/', function () {
    return view('welcome');
 

});*/
//home.blade.php
Route::get('/home/{id}',[HomeController::class,'home']);

//app.blade.php
Route::get('/index',[HomeController::class,'app']);

//route for display data
Route::post('/index',[HomeController::class,'displayData']);














//localhost:8000/home

//required parameter
//example: ID 201512345
/*Route::get('/home/{id}/{name}', function ($id,$name) {
	return view('home',['studid' => $id, 'studname' => $name]);
});*/

//optional parameter
/*Route::get('/home/{id?}/{name?}', function ($id = "21",$name = "James Potter") {

	return view('home',['studid' => $id, 'studname' => $name]);
});*/

/*Route::get('/home', function(){
	return view('home');
});

//localhost:8000/about
Route::get('/about', function () {
    return view('about');
});


//location:8000/contact
Route::get('/contact', function () {
   echo "<h1>Contact Page</h1>";
});*/



//localhost:8000/index
Route::get('/index', function () {
    return view('app');
});
