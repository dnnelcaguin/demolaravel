<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
class HomeController extends Controller
{
    
    public function home(){
     //command for retrieving records from the mysql database

        $users =  DB::SELECT("SELECT * FROM tblaravel");
    	return view('home',['users' => $users]);
    }

    public function insertData(Request $request){
        //initialization
        $name=$request->input('name');
        $address=$request->input('address');
        $contact=$request->input('contact');
        //mysql insert command
        DB::INSERT("INSERT into tblaravel(name,address,contact)VALUES(?,?,?)", [$name,$address,$contact]);
        $users =  DB::SELECT("SELECT * FROM tblaravel");
        return view('home',['users' => $users]);

    }
    public function deleteData($id){

        DB::DELETE("DELETE FROM tblaravel WHERE id=?",[$id]);
          $users =  DB::SELECT("SELECT * FROM tblaravel");
        return view('home',['users' => $users]);
    }

    public function editData($id){
        $profile = DB::SELECT("SELECT * FROM tblaravel WHERE id=?",[$id]);
        $isUpdate = "";
        return view('edit',['profile'=> $profile,'isUpdate' => $isUpdate]);
    }

    public function updateData(Request $request, $id){
         //initialization
        $name=$request->input('name');
        $address=$request->input('address');
        $contact=$request->input('contact');

        //updating record
       $isUpdate =  DB::UPDATE('UPDATE tblaravel set name=?,address=?,contact=? WHERE id=?',[$name,$address,$contact,$id]);
        $profile = DB::SELECT("SELECT * FROM tblaravel WHERE id=?",[$id]);
        
        if ($isUpdate == 1 ) {
            $msg = "Record Updated";
        }else{
            $msg = "Record Not Updated";
        }
        return view('edit',['profile'=> $profile,'msg' => $msg]);
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
