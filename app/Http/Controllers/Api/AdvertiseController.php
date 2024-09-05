<?php

namespace App\Http\Controllers\Api;
use App\Models\advertise;
use App\Http\Controllers\Controller;
use  Illuminate\Support\Facades\Auth;
use  Illuminate\Support\Facades\Hash;
use  Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AdvertiseController extends Controller
{
    public function advertise(Request $request){
        // echo "advertise";

        $validateUser=Validator::make($request->all(),
        [
            'image'=>'required|mimes:png,jpg,jpeg,gif',
            'url'=>'required',
            'status'=>'required',

        ]);

        if($validateUser->fails()){
            return response()->json([
                  'status'=>false,
                  'message'=>'please fix the errors',
                  'error'=>$validateUser->errors()
            ],401);
        }
            
            $image=$request->image;
            $ext=$image->getClientOriginalExtension();
            $imageName=time().'.'.$ext;
            $image->move(public_path().'/uploads/',$imageName);
              

            DB::table('advertise')->insert([
                'image'=>$request->image,
                'url' => $request->input('url'),
                'status' => $request->input('status'),
            ]);
    
        return response()->json([
              'status'=>true,
              'message'=>'advertise successfully.',
              'data'=>$image,
           
            ]);
        }
         
    }
// }
