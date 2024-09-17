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
        // echo "medicine";
 
            $data = DB::table('medicine')
            ->select('*') 
            ->where('category', $id) 
            ->first(); 
            return response()->json($data);
          }  

    }

