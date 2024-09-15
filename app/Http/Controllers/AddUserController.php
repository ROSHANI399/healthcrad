<?php

namespace App\Http\Controllers;
use App\Models\register;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AddUserController extends Controller
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
        return view ("register");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
     
        
$request->validate(
    [
        'url'=>'required',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'   
        
        ]) ;


// echo "<pre>";

$c['id']=$request['id'];
$c['url']=$request['url'];
 
 
         $imageFile = $request->file('image');
        

        // Define the destination path within the public directory
        $publicPath = 'uploads';

        // Create unique filenames for the images
        $imageFileName = time() . '_' . $imageFile->getClientOriginalName();
 
        // Move the files to the desired location in the public directory
        $imageFile->move(public_path($publicPath), $imageFileName);
 
        // Generate the URLs for the stored images
        $image = url($publicPath . '/' . $imageFileName);
      
    
$c=new register;
$c['url']=$request['url'];
$c['image']=$image;
$c['status']=$request['status'];
// dd($c);
if($c->save())
{
    echo "<script>alert('Insert Successfully');</script>";
    return redirect('/table');

}
    }
    public function register(){
        return view('register');

    }

 public function regcode(Request $request){
    $a=new register;
    $a['url']=$request['url'];
    $a['image']=$request['image'];
    $a['status']='1';
    $a['datetime']=$request['datetime'];
    // $c['datetime']=date('Y-m-d H:i:s');
    if ($a->save()) {
        session()->flash('success', 'Record Inserted Successfully');
        return redirect('/table');
    } else {
        session()->flash('error', 'Insert Failed');
        return redirect()->back();
    }
   
}
   
    public function table(){
    $c=register::all();
   
    return view('table',['data'=>$c]);
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
        $data=register::where('id',$id)->first();
        $h3="Update Form";
        $btn="Update";
        $url="table/".$id."/update";
        $id=compact('data','h3','url','btn');
        return view("register",$id);
    }

    /**
     * Update the specified resource in storage.
     */

    // public function updateStatus(Request $request, string $id)
    // {
     
    // }
    
    public function updateStatus(Request $request, string $id,string $status)
    {
      
        $register = Register::where('id', $id)->update(['status'=>$status]);
        return redirect('/table');
    }


    /**
     * Remove the specified resource from storage.
     */

    public function destroy(string $id)
    {
       
        $register = register::findOrFail($id);
        $register->delete();       
        return redirect('/table');
    }

    public function advertis_list()
    {
            // return view('/advertis_list');
            $user = DB::table('advertise')->get();
            // dd($user);
            return view('advertis_list', ['users' => $user]);
    }


    public function offerslider()
    {
            return view('/offerslider');
            
    }


    public function userlist()
    {
        $user = DB::table('user')->get();
        // dd($user);
        return view('user-list', ['users' => $user]);
    }

    
    public function userenquiry()
    {
        $user = DB::table('enquiry')->get();
         
        return view('user-enquiry', ['users' => $user]);
    }


/////////////////////////Doctor////////////////////////
    
        public function listdoctor(){
        // return view('doctor-list');
        $user = DB::table('doctor')->get();
        return view('doctor-list', ['users' => $user]);
        }

        public function category(){
            // return view('doctor-list');
            $user = DB::table('department')->get();
            return view('category', ['users' => $user]);
            }
     

        public function contact(){
        // return view('contact');
        $user = DB::table('contact')->get();
        return view('contact', ['users' => $user]);
        
    }

    public function enquiry(){
        $user = DB::table('enquiry')->get();
       
        return view('doctor-enquiry', ['users' => $user]);
        // return view('doctor-enquiry');
    }
    

    public function appointment(){
        // return view('appointment');
        // $user = DB::table('appointment')->get();
        // return view('appointment', ['users' => $user]);
        
            $user = DB::table('appointment')
                ->join('user', 'appointment.id', '=', 'user.id') 
                ->join('doctor', 'appointment.doctor', '=', 'doctor.id')
                ->select('appointment.*', 'user.phone','doctor.name')
                ->get();
                return view('appointment', ['users' => $user]);
       
          }

        public function check_patient(){
        // return view('check_patient');
        $user = DB::table('appointment')->get();
        return view('check_patient', ['users' => $user]);
    }


    public function time_slot(){
        // return view('time_slot');
        $user = DB::table('slot')->get();
        return view('time_slot', ['users' => $user]);
    }

    public function bankdatail(){
        // return view('bank_detail');
        $user = DB::table('bank_detail')->get();
        return view('bank_detail', ['users' => $user]);
      
    }

    public function histroy(){
        // return view('doctor_history');
        $user = DB::table('appointment')->get();
        return view('doctor_history', ['users' => $user]);
      
    }



//////////////////////Pharmacies/////////////////////
    public function pharmalist(){
        return view('pharmalist');
   
      
    }

    public function pharmaenquiry(){
        // return view('pharmaenquiry');
        $user = DB::table('enquiry')->get();
       
        return view('doctor-enquiry', ['users' => $user]);
   
      
    }

    public function pharmabank_detail(){
        // return view('bank_detail');
        $user = DB::table('bank_detail')->get();
        return view('pharmabank_detail', ['users' => $user]);
      
    }


///////////////////Agency////////////////////
    public function agencylist(){
        // return view('agencylist');
        $user = DB::table('agency')->get();
        return view('agencylist', ['users' => $user]);
    }

    public function agencyenquiry(){
        return view('agencyenquiry');
      
    }

    public function agencybank_detail(){
        // return view('agencybank_detail');
        $user = DB::table('bank_detail')->get();
        return view('agencybank_detail', ['users' => $user]);
      
    }

    public function agencybook_detail(){
        return view('agencyBook_detail');
      
    }

    public function agency_history(){
        return view('agency_history');
      
    }


///////////////////////Medicien///////////////////

public function medicien_list(){
    return view('medicien_list');
  
}

public function medicienbank_detail(){
    // return view('medicienbank_detail');
    $user = DB::table('bank_detail')->get();
    return view('medicienbank_detail', ['users' => $user]);
  
}


//////////////////Zone///////////////////////

public function zone_list(){
    return view('zone_list');
  
}

//////////////////////category/////////////

public function category_list(){
    // return view('category_list');
    $user = DB::table('medicine_category')->get();
    return view('category_list', ['users' => $user]);
  
}

///order///

public function order_list(){
    return view('order_list');
}

public function order_history(){
    return view('order_history');
}

///pathlab

 public function Path_Lab(){
    return view('Path _Lab');
 }

    public function Emergency(){
        return view('Emergency');
        }
  }

