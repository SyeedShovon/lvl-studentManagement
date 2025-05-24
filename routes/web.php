<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('about', function(){
    return "This is about page";
});

Route::prefix('details')->group(function(){
    Route::get('student',function(){
        return "This is student page";
    })->name('student-details');
    Route::get('teacher', function(){
        return "This is teacher page";
    })->name('teacher-details');
});

Route::get('student/{id}/{name}', function($id,$name){
    return $name."'s student-id is- ".$id;
});

//for 404
Route::fallback(function(){
    return "Error!! Under Construction. Try later!";
});