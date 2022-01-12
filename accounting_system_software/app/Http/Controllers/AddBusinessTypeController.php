<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\AddBusinessTypeModel;
use DB;
use PDF;

class AddBusinessTypeController extends Controller{
   private $title="Accounting Software";


public function viewd(){
    
    $vi['title']=$this->title;
    $vi['qr']= AddBusinessTypeModel::get();
    
    echo view('header.header',$vi);
    echo view('sidebar.sidebar');
    echo view('dashboard.submain');
    echo view('AddBusinessType.AddBusinessType',$vi);
    echo view('footer.footer');
}

// public function pdf(){
    
//     $vi['title']=$this->title;
//     $vi['qr']= AddBusinessTypeModel::get();
    

// $pdf = PDF::loadView('users.pdf', $vi);
//     return $pdf->stream('PWAD Users List.pdf');

// }
// public function print(){
    
//     $vi['title']=$this->title;
//     $vi['qr']= AddBusinessTypeModel::get();
    

//     echo view('users.print',$vi);

// }

public function save(Request $request){
    $data=$request->all();
    AddBusinessTypeModel::create($data);

}

public function destroy(Request $request){
   $id=$request->post('id'); 
   $data= AddBusinessTypeModel::find($id);
   $data->delete();
   }
public function update_form(Request $request){
      $id=$request->id;
      $data['qr']= AddBusinessTypeModel::find($id);
      echo view('AddBusinessType.UpdateBusinessType',$data);
   
   }   
 public function update(Request $request){
    $id=$request->id;
    
    $data= AddBusinessTypeModel::find($id);
    $data->id=$request->id;
    $data->business_type=$request->business_type;
    $data->save();

}
    
}
