<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\LoginModel;
use DB;
use PDF;

class LoginController extends Controller{
   private $title="Accounting Software";


public function viewd(){
    
    $vi['title']=$this->title;
    $vi['qr']= LoginModel::get();
    
    echo view('login.login',$vi);

}

public function authentiation(Request $request){
   // dd($request->all());
    $user_name=$request->email;
    $user_pass=$request->password;
    $token=$request->_token;
    $unique_user= LoginModel::where('email','=',$user_name)
                             ->orWhere('phone','=',$user_name)
                             ->count();
    
    $unique_pass= LoginModel::where('email','=',$user_name)
                             ->orWhere('phone','=',$user_name)
                             ->where('password',$user_pass)
                             ->count();
    $result= LoginModel::where('email','=',$user_name)
                             ->orWhere('phone','=',$user_name)
                             ->where('password',$user_pass)
                             ->first();
    
    if($unique_user==1 && $unique_pass==1){
        $result_id=$result->user_id;
        $result_names=$result->user_name;
        $result_email=$result->email;
        $result_phone=$result->phone;
        $result_password=$result->password;
        $result_status=$result->status;
        $result_token=$result->_token;
        $result_picture=$result->picture;
       
        $sess_name=$request->session()->put('sess_names',$result->user_name);
        $sess_name=$request->session()->put('sess_name',$result->full_name);
        $sess_user_id=$request->session()->put('sess_id',$result->user_id);
        $sess_email=$request->session()->put('sess_email',$result->email);
        $sess_phone=$request->session()->put('sess_phone',$result->phone);
        $sess_password=$request->session()->put('sess_password',$result->password);
        $result_status=$request->session()->put('sess_status',$result->status);
        $result_picture=$request->session()->put('sess_picture',$result->picture);
        $data['res']=1;
        echo json_encode($data);
        }else if($unique_user==0 && $unique_pass==0){
            $data['res']=2;
        echo json_encode($data);
        }else if($unique_user==0 ){
            $data['res']=3;
        echo json_encode($data);
        }else if($unique_pass==0 ){
            $data['res']=4;
        echo json_encode($data);
        }else if($result->status==0 ){
            $data['res']=5;
        echo json_encode($data);
        }
    
}

public  function logout(Request $request){
    $request->session()->forget('sess_id');
    $request->session()->forget('sess_user_name');
    $request->session()->forget('sess_user_email');
    $request->session()->forget('sess_user_pass');
    $request->session()->flush();
    return redirect('login');
}


   
 
    
}
