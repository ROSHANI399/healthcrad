<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use  Illuminate\Support\Facades\Auth;
use  Illuminate\Support\Facades\Hash;
use  Illuminate\Support\Facades\Validator;
class Register_Controller extends Controller
{ 
    public function Register(Request $request){
        // echo "Register";
        try{
            $validate = Validator::make($request->only('name'), [
                'name' => 'required|string|max:255'
            ]);
                if ($validate->fails()) {
                $errors = implode(", ", $validate->errors()->all());
                return response()->json([
                'status' => false,
                'message' => 'Failed: ' . $errors
            ], 401);
       
        }else{
            $validate = Validator::make($request->only('email'), [
                'email' => 'required|string|email|max:255|unique:register',
            ]);
                 if ($validate->fails()) {
                 $errors = implode(", ", $validate->errors()->all());
                 return response()->json([
                'status' => false,
                'message' => 'Failed: ' . $errors
            ], 401);
       
        }else{
            $validate = Validator::make($request->only('mobileno'), [
                // 'mobileno' => 'required|mobileno|unique:register',
                'mobileno'=>'required|digits:10',
           
            ]);
             
               if ($validate->fails()) {
               $errors = implode(", ", $validate->errors()->all()); 
               return response()->json([
              'status' => false,
              'message' => 'Failed: ' . $errors
            ], 401);
       
        }else{
              $validate = Validator::make($request->only('gender'), [
             'gender'=>'required|string|in:male,female,other'
            ]);
                 if ($validate->fails()) {
                 $errors = implode(", ", $validate->errors()->all());
                 return response()->json([
                'status' => false,
                'message' => 'Failed: ' . $errors
            ], 401);
       
        }else{
            $validate = Validator::make($request->only('dob'), [
                'dob' => 'required|date'
            ]);
                 if ($validate->fails()) {
                $errors = implode(", ", $validate->errors()->all());  
                 return response()->json([
                'status' => false,
                'message' => 'Failed: ' . $errors
            ], 401);
       
                  }
             }
        }
     }           
 }

            $id= DB::table('register')->insertGetId([
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            // 'password' => Hash::make($request->input('password')),
            'mobileno'=>$request->input('mobileno'),
            'gender'=>$request->input('gender'),
            'dob'=>$request->input('dob'),

        ]);

        return response()->json([
        'status' => true,
        'message' => 'added successfully .',
        'id' => $id  
        ], 200);
    }

        catch(\Throwable $th){
        return response()->json([
        'status'=>false,
        'error' => $th->getMessage(),
        ],500);
    
       }
    }

    

/////////Update////////
public function update(Request $request, $id)
{
    try{
        $validate = Validator::make($request->only('name'), [
            // 'name' => 'required|string|max:255'
        ]);
            if ($validate->fails()) {
            $errors = implode(", ", $validate->errors()->all());
            return response()->json([
            'status' => false,
            'message' => 'Failed: ' . $errors
        ], 401);
   
   
    }else{
        $validate = Validator::make($request->only('email'), [
            //'email' => 'required|string|email|max:255|unique:register',                    
        ]);
             if ($validate->fails()) {
             $errors = implode(", ", $validate->errors()->all());
             return response()->json([
            'status' => false,
            'message' => 'Failed: ' . $errors
        ], 401);
   
    }else{
        $validate = Validator::make($request->only('mobileno'), [
            // 'mobileno' => 'required|mobileno|unique:register',
            // 'mobileno'=>'required',
           'mobileno'=>'required|digits:10',
        ]);
         
           if ($validate->fails()) {
           $errors = implode(", ", $validate->errors()->all()); 
           return response()->json([
          'status' => false,
          'message' => 'Failed: ' . $errors
        ], 401);
   
    }else{
          $validate = Validator::make($request->only('gender'), [
        //  'gender'=>'required|string|in:male,female,other'
        ]);
             if ($validate->fails()) {
             $errors = implode(", ", $validate->errors()->all());
             return response()->json([
            'status' => false,
            'message' => 'Failed: ' . $errors
        ], 401);
   
    }else{
        $validate = Validator::make($request->only('dob'), [
            // 'dob' => 'required|date'
        ]);
             if ($validate->fails()) {
            $errors = implode(", ", $validate->errors()->all());  
             return response()->json([
            'status' => false,
            'message' => 'Failed: ' . $errors
        ], 401);
   
              }
         }
     }
  }           
}
        
        $user = DB::table('register')->where('id', $id)->first();
        if ($user) {       
                 DB::table('register')
                ->where('id', $id)
                ->update($request->only(['name','email','mobileno', 'gender', 'dob']));

            return response()->json([
                'status' => true,
                'message' => 'Updated successfully.',
               
            ], 200);

            } else {
            return response()->json([
                'status' => false,
                'message' => 'failed .',
            ], 404);
        }

        }catch (\Throwable $th) {
        return response()->json([
            'status' => false,
            'error' => $th->getMessage(),
        ], 500);
       }
  
    }
}