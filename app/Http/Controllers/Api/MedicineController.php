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
    public function medicine(Request $request){
        // echo "medicine";
       
        try{
        $validate=Validator::make($request->all(),
    [
    
    'name'=>'required|name|unique:medicine,name',
    'category'=>'required',
    'subcategory'=>'required',
    'price'=>'required',
    'discount'=>'required',
    'box'=>'required',
    's_price'=>'required',
   
   
    // 'generic'=>'required',
    // 'company'=>'required',
    // 'effects'=>'required',
    // 'e_date'=>'required',
    // 'add_date'=>'required',
    // 'hospital_id'=>'required',
    // 'image'=>'required',
    // 'discription'=>'required',
    // 'shopid'=>'required',
    // 'decription_required'=>'required',
    // 'discounted_amount'=>'required',
    // 'prescription'=>'required',
          
        ]);

    //     if($validate ->fails()){
    //     return response()->json([
    //           'status'=>false,
    //           'message'=>'added Failed',
    //         'error'=>$validate ->errors() 
               
    //     ],401);
    // }

    if ($validate->fails()) {
 
        $errors = implode(", ", $validate->errors()->all());
        
        return response()->json([
            'status' => false,
            'message' => 'Failed: ' . $errors
        ], 401);
    }
     
    DB::table('medicine')->insert([
        'name'=>$request->input('name'),
        'category'=>$request->input('category'),
        'subcategory'=>$request->input('subcategory'),
        'price'=>$request->input('price'),
        'discount'=>$request->input('discount'),
        'box'=>$request->input('box'),
        's_price'=>$request->input('s_price'),
        
      
        // 'generic'=>$request->input('generic'),
        // 'company'=>$request->input('company'),
        // 'effects'=>$request->input('effects'),
        // 'e_date'=>$request->input('e_date'),
        // 'add_date'=>$request->input('add_date'),
        // 'hospital_id'=>$request->input('hospital_id'),
        // 'image'=>$request->input('image'),
        // 'discription'=>$request->input('discription'),
        // 'shopid'=>$request->input('shopid'),
        // 'decription_required'=>$request->input('decription_required'),
        // 'discounted_amount'=>$request->input('discounted_amount'),
        // 'prescription'=>$request->input('prescription'),
    
      ]);

 
    return response()->json([
        'status' => true,
        'message' => 'added successfully',
     
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

    

