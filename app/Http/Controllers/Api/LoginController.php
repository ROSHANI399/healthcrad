<?php
namespace App\Http\Controllers\Api;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  Illuminate\Support\Facades\Auth;
use  Illuminate\Support\Facades\Hash;
use  Illuminate\Support\Facades\Validator;
class LoginController extends Controller
{
    public function login(Request $request){
        try{
            $validateUser=Validator::make($request->all(),
            [
                'email'=>'required|email',
                'password'=>'required',
          
            ]
        );
     
        
        if($validateUser->fails()){
            return response()->json([
                  'status'=>false,
                  'message'=>'Validation Error',
                  'error'=>$validateUser->errors()
            ],401);           
        }
    
       
        if(!Auth::attempt($request->only(['email','password']))){
            return response()->json([
                'status'=>false,
                'message'=>'email and password not matching',
                
           ],401);
        }

        $user = Auth::user();
        return response()->json([
            'status' => true,
            'message' => 'login successfully',
            'user' => $user,
           
        ], 200);
        }
       
        catch(\Throwable $th){
        return response()->json([
           'status'=>false,
           'message'=>$th->getMessage(),
        ],500);
      }
    }
 } 