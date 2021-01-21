<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function home($id){
    	//
    	$firstname = "Lord Voldemort";
    	$lastname = "Riddle";
    	return view('home',['fname' => $firstname, 'lname' => $lastname,'id' => $id]);
    }

    public function app(){
    	return view('app');
    }

    public function displayData(Request $request){
    	//initialization

    	$username = $request->input('uname');
    	$password = $request->input('pword');

    	return view('app',['uname' => $username, 'pword' => $password]);

    }
}
