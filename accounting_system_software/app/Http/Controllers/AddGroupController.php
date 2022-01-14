<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\AddGroupModel;
use DB;
use PDF;

class AddGroupController extends Controller{
   private $title="Accounting Software";


public function viewd(){
    
    $vi['title']=$this->title;
    $vi['qr']= AddGroupModel::get();
    
    echo view('header.header',$vi);
    echo view('sidebar.sidebar');
    echo view('dashboard.submain');
    echo view('AddGroup.AddGroup',$vi);
    echo view('footer.footer');
}

public function pdf(){
    
    $vi['title']=$this->title;
    $vi['qr']= AddGroupModel::get();
    

$pdf = PDF::loadView('AddGroup.pdf', $vi);
    return $pdf->stream('PWAD Users List.pdf');

}
public function print(){
    
    $vi['title']=$this->title;
    $vi['qr']= AddGroupModel::get();
    

    echo view('AddGroup.print',$vi);

}

public function save(Request $request){
    $data=$request->all();
    AddGroupModel::create($data);

}

public function destroy(Request $request){
   $id=$request->post('id'); 
   $data= AddGroupModel::find($id);
   $data->delete();
   }
public function update_form(Request $request){
      $id=$request->id;
      $data['qr']= AddGroupModel::find($id);
      echo view('AddGroup.UpdateGroup',$data);
   
   }   
 public function update(Request $request){
    $id=$request->id;
    
    $data= AddGroupModel::find($id);
    $data->id=$request->id;
    $data->group_type_name=$request->group_type_name;
    $data->debit_credit=$request->debit_credit;
    $data->save();

}
    
}
