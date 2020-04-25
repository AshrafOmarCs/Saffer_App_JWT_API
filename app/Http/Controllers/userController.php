<?php

namespace App\Http\Controllers;
use App\User;
use App\City;

use Hash;
use Illuminate\Http\Request;

class userController extends Controller
{
    //
    public function reqistration(Request $request){
       
        $user = new User;
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->UserType = $request->UserType;
        $user->city_id = $request->city_id;
        $user->password = Hash::make($request->password);

        if($user->save()){
            $credentials = request([$request->phone, Hash::make($request->password)]);
            
            return response()->json([
                'token' => $token,
                'type' => 'bearer', // you can ommit this
                'expires' => auth('api')->factory()->getTTL() * 60, // time to expiration
            ]);
           
        }else{
            $data = array('status'=>'False','massage'=>'Email and Phone it may be Duplicated');
            echo \json_encode($data);
        }
        

    }
    public function citys(){
        $citys = City::all();
        echo json_encode($citys);
    }
    
}
