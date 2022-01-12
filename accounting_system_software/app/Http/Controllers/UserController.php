<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\UsersModel;
use DB;
use PDF;

class UserController extends Controller{
   private $title="Accounting Software";


public function viewd(){
    
    $vi['title']=$this->title;
    $vi['qr']= UsersModel::get();
    
    echo view('header.header',$vi);
    echo view('sidebar.sidebar');
    echo view('dashboard.submain');
    echo view('users.AddUser',$vi);
    echo view('footer.footer');
}

public function pdf(){
    
    $vi['title']=$this->title;
    $vi['qr']= UsersModel::get();
    

$pdf = PDF::loadView('users.pdf', $vi);
    return $pdf->stream('PWAD Users List.pdf');

}
public function print(){
    
    $vi['title']=$this->title;
    $vi['qr']= UsersModel::get();
    

    echo view('users.print',$vi);

}

public function save(Request $request){

    if($request->file('picture')){
        $img=$request->file('picture');
        $img->getClientOriginalName();
        $img->getClientOriginalExtension();
        $img->getRealPath();
        $img->getMimeType();
        $img->getSize();
        $path="assets/upload/";
        $img->move($path,$img->getClientOriginalName());
        $data=new UsersModel();
        $data->user_name=$request->user_name;
        $data->full_name=$request->full_name;
        $data->email=$request->email;
        $data->phone=$request->phone;
        $data->password=$request->password;
        $data->picture=$path.$img->getClientOriginalName();
        $data->account_creation_date=$request->account_creation_date;
        $data->status=$request->status;
        $data->_token=$request->_token;
        $data->save();
        
    }else{
          $data=$request->all();
          UsersModel::create($data);
    }

}

public function destroy(Request $request){
   $id=$request->post('id');
   // dd($id); 
   $data= UsersModel::where('user_id','=',$id)->first();
   $data->delete();
   }
public function update_form(Request $request){
      $id=$request->id;
      $data['qr']= UsersModel::where('user_id','=',$id)->first();
      echo view('users.update',$data);
   
   }
public function update(Request $request){
     $id=$request->user_id;
   if($request->file('picture')){
        $img=$request->file('picture');
        $img->getClientOriginalName();
        $img->getClientOriginalExtension();
        $img->getRealPath();
        $img->getMimeType();
        $img->getSize();
        $path="assets/upload/";
        $img->move($path,$img->getClientOriginalName());
        $data= UsersModel::where('user_id','=',$id)->first();
        $data->user_name=$request->user_name;
        $data->full_name=$request->full_name;
        $data->email=$request->email;
        $data->phone=$request->phone;
        $data->password=$request->password;
        $data->picture=$path.$img->getClientOriginalName();
        $data->account_creation_date=$request->account_creation_date;
        $data->status=$request->status;
        $data->_token=$request->_token;
        $data->save();
        
    }else{
        $data= UsersModel::where('user_id','=',$id)->first();
        $data->user_name=$request->user_name;
        $data->full_name=$request->full_name;
        $data->email=$request->email;
        $data->phone=$request->phone;
        $data->password=$request->password;
        $data->account_creation_date=$request->account_creation_date;
        $data->status=$request->status;
        $data->_token=$request->_token;
        $data->save();
    }
    

}
   
 
    
}
