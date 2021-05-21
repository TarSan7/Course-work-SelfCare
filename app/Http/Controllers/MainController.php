<?php

namespace App\Http\Controllers;
use App\Models\Course;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function firstPage(){
        return view('landing');
    }

    public function meditationPage(){
        return view('meditation');
    }

    public function yogaPage(){
        return view('yoga');
    }

    public function courseInfoPage($id){
        $course = new Course();
        $advantages=-$course->find($id)->advantages;
        return view('courseInfo', compact('advantages', 'id'));
    }
    
    public function coursesPage()
    {
        return view('courses');
    }
}


