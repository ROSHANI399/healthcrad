<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use  Illuminate\Support\Facades\Auth;
use  Illuminate\Support\Facades\Hash;
use  Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class LoginApiController extends Controller
{
    public function Login(Request $request){
        // echo "Login";
        try{

            $validate = Validator::make($request->only('mobileno'), [
                'mobileno' => 'required',
            ]);
                 if ($validate->fails()) {
                 $errors = implode(", ", $validate->errors()->all());
                 return response()->json([
                'status' => false,
                'message' => 'login Failed: ' . $errors
            ], 401);

        }        
   
    $user= DB::table('register') 
    ->where('mobileno', $request->mobileno)
    ->first();


    if (!$user) {
        return response()->json([
            'status' => false,
            'message' => 'Mobile number not matching.',
        ], 401);
    }


         return response()->json([
        'status' => true,
        'message' => 'login successfully .',
        ], 200);
    }


        catch(\Throwable $th){
        return response()->json([
        'status'=>false,
        'error' => $th->getMessage(),
        ],500);
    
       }
    }
}
