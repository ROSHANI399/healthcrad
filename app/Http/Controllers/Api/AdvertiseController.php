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
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'url'=>'required|unique:advertise,url',
            'status'=>'required',

        ]);

        if($validateUser->fails()){
            return response()->json([
                  'status'=>false,
                  'message'=>'please fix the errors',
                  'error'=>$validateUser->errors()
            ],401);
        }
            
        $imageFile = $request->file('image');
        $publicPath = 'uploads';
        $imageFileName = time() . '_' . $imageFile->getClientOriginalName();
        $imageFile->move(public_path($publicPath), $imageFileName);
        $image = url($publicPath . '/' . $imageFileName);
      

            DB::table('advertise')->insert([
                'image'=>$image,  
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
