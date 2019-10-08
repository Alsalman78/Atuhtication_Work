<?php


Route::get('/', function () {
    return view('welcome');
});

Route::get('login','AuthController@login');

Route::post('loginStore','AuthController@loginStore');


Route::group(['middleware'=>'checkloggedin'],function(){

    Route::get('home','HomeController@home');

    Route::get('timeline','HomeController@timeline');

    

Route::group(['middleware'=>'IsTeacher'],function(){

  	  Route::get('teacher1','HomeController@teacher1');
      Route::get('teacher2','HomeController@teacher2');
  });

Route::group(['middleware'=>'IsStudent'],function(){
     Route::get('student1','HomeController@student1');
     Route::get('student2','HomeController@student2');

  });


});

 Route::get('unauthorized',function(){

 	return view('unauthorized');
 });

   
  




