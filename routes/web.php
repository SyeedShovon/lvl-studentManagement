<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function(){
    return "This is about page";
});

//prefix add url
Route::prefix('details')->group(function(){
    Route::get('student',function(){
        return "This is student page";
    })->name('student-details');
    Route::get('teacher', function(){
        return "This is teacher page";
    })->name('teacher-details');
});

//with parameter
Route::get('student/{id}/{name}', function($id,$name){
    return $name."'s student-id is- ".$id;
});

//for 404
Route::fallback(function(){
    return "Error!! Under Construction. Try later!";
});

// two ways to call view with data
Route::get('about-us/{name}/{email}', function($name,$email){
    // $name = 'Shovon3';
    // $email = 's_test@gmail.com';
    // return view('aboutus')->with('name',$name)->with('email',$email);
    // return view('aboutus',compact('name','email'));
    // return view('aboutus',['name'=>$name,'email'=>$email]);

    return view('aboutus',compact('name','email'));
});
//or
Route::view('contact-us/{name}/{id}','contactus');