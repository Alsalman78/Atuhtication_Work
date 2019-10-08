<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
     public function home(){
    	return view('home');
    }

      public function timeline(){
    	return view('timeline');
    }

      public function student1(){
    	echo "student 1";
    }
      public function student2(){
    	echo "student 2";
    }

     public function teacher1(){
    	echo "teacher 1";
    }

     public function teacher2(){
    	echo "teacher 2";
    }



}
