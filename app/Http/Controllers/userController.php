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
        $sql = "insert into users()values()";
        $user = new User;
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->UserType = $request->UserType;
        $user->city_id = $request->city_id;
        $user->password = Hash::make($request->password);

        if($user->save()){
            $data = array('status'=>'True','massage'=>'new Recored has been Inserted');
            echo json_encode($data);
        }else{
            $data = array('status'=>'False','massage'=>'check your Email and Phone it may be Duplicated');
            echo \json_encode($data);
        }
        

    }
    public function citys(){
        $citys = City::all();
        echo json_encode($citys);
    }
    
}
