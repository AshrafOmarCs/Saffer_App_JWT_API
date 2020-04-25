<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
class orderController extends Controller
{
    //
    public function store(Request $request){
        $order = new Order;
        $order->description = $request->description;
        $order->payType = $request->payType;
        $order->user_id = $request->user_id;
        $order->img = $request->img;
        $order->ststus = 1;
 
        if($order->save()){
            $data = array('status'=>'True','data'=>'[]');
            return response()->json($data);
            

        }

    }
    public function list(Request $request){
        $order = Order::where("user_id" , $request->id)->get();
        $data = array('status'=>'True','data'=>$order);
    return response()->json($data);
    }
}
