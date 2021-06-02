<?php

namespace App\Http\Controllers;
use App\Models\Course;
use App\Models\Order;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session as FacadesSession;

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
    public function confirmationPage($id)
    {
        $order = new Order();
        $order = $order->find($id);
        return view('confirmation', ['order' => $order]);
    }
}


