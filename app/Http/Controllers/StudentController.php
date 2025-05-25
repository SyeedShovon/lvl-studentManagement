<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function info_index(){
        return "Hello from controller";
    }

    public function info_index2(){
        return "Hello from same controller another function!!";
    }
}
