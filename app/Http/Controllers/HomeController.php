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
}
