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
        return view('courseInfo', ['advantages'=>$course->find($id)->advantages]);
    }
    public function coursesPage()
    {
        return view('courses');
    }
    public function basket()
    {
        return view('basket');
    }
}


