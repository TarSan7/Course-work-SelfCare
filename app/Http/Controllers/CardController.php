<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CardController extends Controller
{
    public $type = [
        1 => 'yoga',
        2 => 'meditation',
        3 => 'eat',
        4 => 'constructor'
    ];

    public function index() {
        $total = session()->get('yoga', 0) + session()->get('meditation', 0) + session()->get('eat', 0) + (session()->get('constructor', 0) == 0 ? 0 : 1);
        session()->put('totalQuatity', $total);
        return view('basket', ['yoga' => session()->get('yoga', 0), 'meditation' => session()->get('meditation', 0), 'eat' => session()->get('eat', 0), 'constr' => session()->get('constructor', 0)]);
    }
    public function addcourse(Request $rec)
    {
        if($rec->id == 4){
            session()->put($this->type[$rec->id], ['y' => $rec->checkbox1 ? 1 : 0, 'm' => $rec->checkbox2 ? 1 : 0, 'e' => $rec->checkbox3 ? 1 : 0]);
        } else{
            if (session()->get($this->type[$rec->id], 0) == 0) {
                session()->put($this->type[$rec->id], 1);
            } else{
                $val = session()->get($this->type[$rec->id]) + 1;
                session([$this->type[$rec->id] => $val]);
            }
        }
        return redirect()->route('cardIndex');
    }

    public function minus($rec)
    {
        if (session()->get($this->type[$rec], 0) > 0) {
            session()->put($this->type[$rec], session()->get($this->type[$rec]) - 1);
        } 
        return redirect()->route('cardIndex');
    }
    public function plus($rec)
    {
        session()->put($this->type[$rec], session()->get($this->type[$rec]) + 1);
        return redirect()->route('cardIndex');
    }
    public function delete($rec)
    {
        session()->put($this->type[$rec], 0);
        return redirect()->route('cardIndex');
    }
}
