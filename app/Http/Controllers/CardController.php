<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;


class CardController extends Controller
{
    public function index() {
        return view('basket');
    }
}
