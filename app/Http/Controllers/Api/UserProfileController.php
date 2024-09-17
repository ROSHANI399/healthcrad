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
     
        $data = DB::table('users')
        ->select('*') 
        ->where('id', $id) 
        ->first(); 


        return response()->json($data);
        if ($users()) {
            return response()->json([
                'message' => 'Not found',
                
            ], 404);
          } 
      
      }
  }




  