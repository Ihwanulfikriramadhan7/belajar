<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //
    public function register(request $request){
        $input =[
            "name"=>$request->name,
            "password"=>$request->password ,

          
        ];
        $user = User::where(`email`,$request->email)->first();
        if(Auth::attempt($input)){
            $token = $user->createToken('token')->plainTextToken;
            return response()->json([
                "code"=>200,
                "status"=>"success",
                "message"=> "login Success",
                "token"=>$token 
            ]);
        }else{
            return response()->json([
                "code"=>401,
                "status"=>"error",
                "message"=> "login Failed",
            ]);
        }
        // $user = User::create($input);

        // return response()->json([
        //     "status"=>"success",
        //     "message"=> "Register Success",
        // ]);    
    }
}
