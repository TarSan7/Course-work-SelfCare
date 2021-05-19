<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function firstPage(){
        return view('landing');
    }

    public function meditationPage(){
        return view('meditation');
    }
    
    public function coursesPage()
    {
        return view('courses');
    }
}


