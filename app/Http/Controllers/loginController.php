<?php

namespace App\Http\Controllers;
use App\Models\login;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class loginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ("login");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){  
     $request->validate(
   
     [  
        'email'=>'required | email',
        'password'=>'required',

        ]) ;

echo "<pre>";
$c=new login;
$c['email']=$request['email'];
$c['password']=bcrypt($request['password']);
if($c->save())
{
    echo "<script>alert('Insert Successfully');</script>";
    return redirect('/index');

}
    }
    public function login(){
        return view('login');

    }

     public function logcode(Request $request){
     
     $email=$request->email;
     
     
     $password=$request->password;
     
     $user = DB::table('login')->where('email', $email)->first();
    
     if($user){
        if($password==$user->password){
            echo "Login Successfully";  
             return redirect('/index');
            echo $per->id;
            echo "Session Created";
            session()->put('id',$per->login_id);
            session()->pull('id');
            echo session()->get('id');
            // echo session()->get('id');
       
        }
        
        else{
            // echo "Login Fail";
             echo "Login Failed: Incorrect Password"; 
        }
     }
     
     else{
        echo "Email Not Exit";
   }
}

public function logout(Request $request){
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect()->route('login');
   }


public function admin(){
    // return view('contact');
    $user = DB::table('login')->get();
    return view('login', ['users' => $user]);
    
}

    /**
     * Display the specified resource.
     */
    
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
