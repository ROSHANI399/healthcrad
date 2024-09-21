<?php

namespace App\Http\Controllers\Api;
use App\Models\User;
use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use  Illuminate\Support\Facades\Auth;
use  Illuminate\Support\Facades\Hash;
use  Illuminate\Support\Facades\Validator;

class MedicineController extends Controller
{
    public function medicine(Request $request ,$id){
        
         
            $data = DB::table('medicine')
            ->select('*') 
            ->where('category', $id) 
            ->first(); 
         

            if ($data) {
                return response()->json($data);
            } else {
                return response()->json(['error' => 'No medicine found for this category'], 404);
            }
          }  

    }

