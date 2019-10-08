<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;

class AuthController extends Controller
{
    public function login(){
    	return view('login');
    }

    public function loginStore(Request $req){
    	$email = $req->email;
    	$password = md5($req->password);

    	//Select* from Student Where email= and password=
    	$obj = student::where('email','=',$email)
    	 		  ->where('password','=',$password)
    	 		  ->first();

    	 		  if ($obj) { // if Successfully logged
    	 		       $req->session()->put('userid',$obj->id);
                        $req->session()->put('userrole',$obj->role);
                       $req->session()->put('username',$obj->name);
                     

                       return redirect()->to('timeline');
    	 		  }
    	 		  else{
    	 		  		echo "invailed Email or Password";
    	 		  }

    }
}
