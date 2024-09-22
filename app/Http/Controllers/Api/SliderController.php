<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use  Illuminate\Support\Facades\Auth;
use  Illuminate\Support\Facades\Hash;
use  Illuminate\Support\Facades\Validator;

class SliderController extends Controller
{
    public function slider(Request $request){

        $users = DB::table('offerslider')
        ->select('image','url','type','created_at','updated_at','status')
        ->get();      
        
        $users=[];
        foreach ($users as $user) {
            $users[] = [
                'image' => $user->image,
                'url' => $user->url,
                'type' => $user->type,
                'created_at' => $user->created_at,
                'updated_at' => $user->updated_at,
                'status' => $user->status,
                
            ];   
        }

         return response()->json([
            'message' => 'successfully',
            'data' => $users
        ], 200); 
   
    }    
}
