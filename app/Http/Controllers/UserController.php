<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller

{
 
    public function userlist()
    {
        // $user = DB::table('user')->get();
        // return view('user-list', ['users' => $user]);
  
        $users = DB::table('user')->get();
      
        return view('user-list', ['users' => $users]);

    }

    public function userenquiry(){
        $users=DB::table('enquiry')
        ->join('users', 'users.id', '=', 'enquiry.user_id')
        ->select('users.*', 'enquiry.id as users_id')
        ->get();
        // dd($users);
        return view('user-enquiry', ['users' => $users]);
   
    }


  
}
