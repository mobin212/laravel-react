<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\RegiserRequest;
use DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function Login(Request $request){
        
        
        try{
            if(Auth::attempt($request->only('email','password'))) 
            {
                // return '4';
                $user = Auth::user();
                $token = $user-> createToken('app')->accessToken;

                return response([
                    'message'=> 'Successfully Login',
                    'token'=> $token ,
                    'user'=> $user
                ],200);
            }

        }catch(Exception $exception){
            return response([
                'message'=> $exception->getMessage()
            ],400);
        }

        return response([
            'message'=> 'Invalid Email Or Password'
        ],401);
        
    } //end


    public function Register(RegiserRequest $request){
        // return '25';
        try{
            $user = User::create([
                'name'=>$request->name,
                'email'=>$request->email,
                'password'=>Hash::make($request->password)
            ]);
            $token = $user->createToken('app')->accessToken;

            return response([
                'message'=>'Register Successfull',
                'token'=> $token
            ],200);
        }
        catch(Exception $exception){
            return response([
                'message'=> $exception->getMessage()
            ],400);
        }

    } // End

}
