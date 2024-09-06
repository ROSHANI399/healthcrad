<?php

namespace App\Http\Controllers\Api;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use  Illuminate\Support\Facades\Auth;
use  Illuminate\Support\Facades\Hash;
use  Illuminate\Support\Facades\Validator;

class DoctorlistController extends Controller
{
    public function doctorregister(Request $request){
        // echo "doctor_list";
        try{
        $validate=Validator::make($request->all(),
        [
            'name'=>'required',
            'email' => 'required|email|unique:doctor,email',
            'address'=>'required',
            'phone' => 'required|unique:doctor,phone', 
            'Qualification'=>'required',
            'profile' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048|unique:doctor,profile',
            'Exp'=>'required',
            'fees'=>'required',
            'department_name'=>'required',
            'city'=>'required',
            'aadhar_front'=>'required|mimes:jpeg,png,jpg,gif|max:2048|unique:doctor,aadhar_front',
            'aadhar_back'=>'required|mimes:jpeg,png,jpg,gif|max:2048|unique:doctor,aadhar_back',
        ]
    );

        if($validate ->fails()){
        return response()->json([
              'status'=>false,
              'message'=>'added Failed',
            'error'=>$validate ->errors()
               
        ],401);
    }

 
    /////profile////
   
    $imageFile = $request->file('profile');
    $publicPath = 'uploads';
    $imageFileName = time() . '_' . $imageFile->getClientOriginalName();
    $imageFile->move(public_path($publicPath), $imageFileName);
    $image = url($publicPath . '/' . $imageFileName);
  
    
    $imageFile = $request->file('aadhar_front');
    $publicPath = 'uploads';
    $imageFileName = time() . '_' . $imageFile->getClientOriginalName();
    $imageFile->move(public_path($publicPath), $imageFileName);
    $image = url($publicPath . '/' . $imageFileName);
  
    

    $imageFile = $request->file('aadhar_back');
    $publicPath = 'uploads';
    $imageFileName = time() . '_' . $imageFile->getClientOriginalName();
    $imageFile->move(public_path($publicPath), $imageFileName);
    $image = url($publicPath . '/' . $imageFileName);
  
    

         DB::table('doctor')->insert([
        'name' => $request->input('name'),
        'email' => $request->input('email'),
        'address'=>$request->input('address'),
        'phone'=>$request->input('phone'),
        'Qualification'=>$request->input('Qualification'),
        'department'=>$request->input('department'),
        'profile' => $image, 
        'Exp'=>$request->input('Exp'),
        'fees'=>$request->input('fees'),
        'department_name'=>$request->input('department_name'),
        'city'=>$request->input('city'),
        'aadhar_front'=>$image,
        'aadhar_back'=>$image,
    
    ]);

 
    return response()->json([
        'status' => true,
        'message' => 'Doctor list added successfully',
     
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

    

