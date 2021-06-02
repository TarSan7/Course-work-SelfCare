<?php

namespace App\Http\Controllers;
use App\Http\Requests\OrderRequest;
use App\Models\Order;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function submit(OrderRequest $req){
        $order = new Order();
        $order->nickname = $req->input('nickname');
        $order->dateBirth = $req->input('date-birth');
        $order->dateCourse = $req->input('date-course');
        $order->tel = $req->input('number');
        $order->yoga = session()->get('yoga', 0);
        $order->meditation = session()->get('meditation', 0);
        $order->food =  session()->get('eat', 0);
        if(session()->get('constructor', 0) == 0){
            $order->constrM = false;
            $order->constrY = false;
            $order->constrF = false;
            $order->constrMY = false;
            $order->constrMF = false;
            $order->constrYF = false;
            $order->constrMYF = false;
        }
        else if(session()->get('constructor',0)['m']>0&&session()->get('constructor',0)['y']>0&&session()->get('constructor',0)['e']>0){
            $order->constrMYF = true;
            $order->constrM = false;
            $order->constrY = false;
            $order->constrF = false;
            $order->constrMY = false;
            $order->constrMF = false;
            $order->constrYF = false;
        }
        else if(session()->get('constructor',0)['m']>0&&session()->get('constructor',0)['y']>0){
            $order->constrMYF = false;
            $order->constrM = false;
            $order->constrY = false;
            $order->constrF = false;
            $order->constrMY = true;
            $order->constrMF = false;
            $order->constrYF = false;
        } else if(session()->get('constructor',0)['m']>0&&session()->get('constructor',0)['e']>0){
            $order->constrMYF = false;
            $order->constrM = false;
            $order->constrY = false;
            $order->constrF = false;
            $order->constrMY = false;
            $order->constrMF = true;
            $order->constrYF = false;
        } else if(session()->get('constructor',0)['y']>0&&session()->get('constructor',0)['e']>0){
            $order->constrMYF = false;
            $order->constrM = false;
            $order->constrY = false;
            $order->constrF = false;
            $order->constrMY = false;
            $order->constrMF = false;
            $order->constrYF = true;
        } else if(session()->get('constructor',0)['m']>0&&session()->get('constructor',0)['e']>0){
            $order->constrMYF = false;
            $order->constrM = false;
            $order->constrY = false;
            $order->constrF = false;
            $order->constrMY = false;
            $order->constrMF = false;
            $order->constrYF = false;
            $order->constrMF = true;
            
        }else{
            $order->constrMYF = false;
            $order->constrM = (session()->get('constructor', 0)['m']>0)?true:false;
            $order->constrY = (session()->get('constructor', 0)['y']>0)?true:false;
            $order->constrF = (session()->get('constructor', 0)['e']>0)?true:false;
            $order->constrMY = false;
            $order->constrMF = false;
            $order->constrYF = false;
        }
        $order->totalPrice =  (session()->get('yoga', 0) + session()->get('meditation', 0) + session()->get('eat', 0)) * 1999 + (session()->get('constructor', 0) == 0 ? 0 : 1) * 2999;
        $order->totalQty= session()->get('totalQuatity');
        $order->save();
        session()->put('yoga', 0);
        session()->put('meditation', 0);
        session()->put('eat', 0);
        session()->put('constructor', 0);
        session()->put('totalQuantity', 0);
        return redirect()->route('confirmation', [$order->id]);
    }
}
