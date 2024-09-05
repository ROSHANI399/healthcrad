<?php

namespace App\Http\Controllers\Api;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  Illuminate\Support\Facades\Auth;
use  Illuminate\Support\Facades\Hash;
use  Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
class   RegisterController extends Controller
{
    public function register(Request $request){
        // echo "register api";
        try{
        $validateUser=Validator::make($request->all(),
            [
               
                'name'=>'required',
                'email'=>'required|email|unique:users,email',
                'password'=>'required',
                'mobileNo'=>'required',
                'address'=>'required',
                'pincode'=>'required',
                'city'=>'required',
                'state'=>'required',
                
            ]
        );
        
        
        if($validateUser->fails()){
            return response()->json([
                  'status'=>false,
                  'message'=>'Registration Failed',
                //   'error'=>$validateUser->errors()->all()
                'error'=>$validateUser->errors()
                   
            ],401);
        }

             $User=User::create ([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password,
            'mobileNo'=>$request->mobileNo,
            'address'=>$request->address,
            'pincode'=>$request->pincode,
            'city'=>$request->city,
            'state'=>$request->state,
       
        ]);
  
    
        $user = Auth::user();
        return response()->json([
            'status'=>True,
            'message'=>'register Successfully',
            'user' => $user,
            

       ],200);
    }
    
    catch(\Throwable $th){
        return response()->json([
           'status'=>false,
           'error' => $th->getMessage(),
        ],500);
    }
    }

    public function profile(Request $request){
        $userId = $request->user_id;
        $user = DB::table('users')->where('id', $userId)->get();
        
        return response()->json([
            'status'=>True,
            'message'=>'register Successfully',
            'user' => $user,
       ],200);
    }  

   public function updateprofile(Request $request){
    //     $userId=$request->user_id;
    //     $user=user::where('id',$userId)->first();
    //     $name="profile/".$userId."/update";
    //     $email="profile/".$userId."/update";
        
    //     return response()->json([
    //         'status'=>True,
    //         'message'=>'register Successfully',
    //         'user' => $user,
    //    ],200);
    try{
        $validateUser=Validator::make($request->all(),
        [
           
            'name'=>'required',
            'email'=>'required|email|unique:users,email',
            'password'=>'required',
            'mobileNo'=>'required',
            'address'=>'required',
            'pincode'=>'required',
            'city'=>'required',
            'state'=>'required',
            
        ]
    );
    
    if ($validateUser->fails()) {
        return response()->json([
            'status' => false,
            'message' => 'Profile Update Failed',
            'errors' => $validateUser->errors()->all()
        ], 401);
    }

    $user = User::find($request->user_id);
    $user->update([
        'name'=>$request->name,
        'email'=>$request->email,
        'password'=>$request->password,
        'mobileNo'=>$request->mobileNo,
        'address'=>$request->address,
        'pincode'=>$request->pincode,
        'city'=>$request->city,
        'state'=>$request->state,
    ]);

    return response()->json([
        'status' => true,
        'message' => 'Profile Updated Successfully',
        'user' => $user,
    ], 200);
}
 
catch (\Throwable $th) {
    return response()->json([
        'status' => false,
        'error' => $th->getMessage(),
    ], 500);
}
     }
   }
