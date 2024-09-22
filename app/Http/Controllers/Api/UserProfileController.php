<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    
    public function department(Request $request){   
             $users = DB::table('department')
            ->select('name', 'description','x','y','hospital_id','image')
            ->get();
            return response()->json($users);
    
            if ($users()) {
                return response()->json([
                    'message' => 'Not found',
                    
                ], 404);
            }
              
                  
                 return response()->json([
                'message' => 'successfully',
                'data' => $users
            ], 200); 
               
      }   

      
      /////userprofile//////
      public function userprofile(Request $request ,$id){
     
        $users = DB::table('user')
        ->select('*') 
        ->where('id', $id) 
        ->get(); 


        if ($users->isEmpty()) {
            return response()->json([
                'error' => 'id not found'
            ], 404);
        }

        if ($users->count() > 1) {
            return response()->json([
                'error' => 'Multiple id found'
            ], 400);  
        }         
        return response()->json($users->first());
      
      }
 }




  