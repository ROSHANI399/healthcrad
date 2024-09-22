<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use  Illuminate\Support\Facades\Auth;
use  Illuminate\Support\Facades\Hash;
use  Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class Ambulance_Booking extends Controller
{
    public function ambulance(Request $request){
        $validate = Validator::make($request->only('name'), [
            'name' => 'required|string|max:255'
        ]);
            if ($validate->fails()) {
            $errors = implode(", ", $validate->errors()->all());
            return response()->json([
            'status' => false,
            'message' => 'Failed: ' . $errors
        ], 401);
   
    }else{
        $validate = Validator::make($request->only('email'), [
            'email' => 'required|string|email|max:255|unique:register',
            
        ]);
             if ($validate->fails()) {
             $errors = implode(", ", $validate->errors()->all());
             return response()->json([
            'status' => false,
            // 'message' => 'Failed: ' . $errors
            'message'=>'email and mobileno not matching',
        ], 401);
   
    }else{
        $validate = Validator::make($request->only('mobileno'), [
            // 'mobileno' => 'required|mobileno|unique:register',
            'mobileno'=>'required|digits:10',
          
         
       
        ]);
         
           if ($validate->fails()) {
           $errors = implode(", ", $validate->errors()->all()); 
           return response()->json([
          'status' => false,
          'message' => 'Failed: ' . $errors
        ], 401);
   
    }else{
          $validate = Validator::make($request->only('gender'), [
         'gender'=>'required|string|in:male,female,other'
        ]);
             if ($validate->fails()) {
             $errors = implode(", ", $validate->errors()->all());
             return response()->json([
            'status' => false,
            'message' => 'Failed: ' . $errors
        ], 401);
   
    }else{
        $validate = Validator::make($request->only('dob'), [
            'dob' => 'required|date'
        ]);
             if ($validate->fails()) {
            $errors = implode(", ", $validate->errors()->all());  
             return response()->json([
            'status' => false,
            'message' => 'Failed: ' . $errors
        ], 401);
   
              }
         }
    }
 }           
}
    }
}
