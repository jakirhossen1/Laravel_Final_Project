<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\AddLedgerSubGroupModel;
use DB;
use PDF;

class AddLedgerSubGroupController extends Controller{
   private $title="Accounting Software";


public function viewd(){
    
    $vi['title']=$this->title;
    $vi['qr']= AddLedgerSubGroupModel::get();
    
    echo view('header.header',$vi);
    echo view('sidebar.sidebar');
    echo view('dashboard.submain');
    echo view('LedgerSubGroup.AddLedgerSubGroup',$vi);
    echo view('footer.footer');
}

// public function pdf(){
    
//     $vi['title']=$this->title;
//     $vi['qr']= AddLedgerSubGroupModel::get();
    

// $pdf = PDF::loadView('users.pdf', $vi);
//     return $pdf->stream('PWAD Users List.pdf');

// }
// public function print(){
    
//     $vi['title']=$this->title;
//     $vi['qr']= AddLedgerSubGroupModel::get();
    

//     echo view('users.print',$vi);

// }

public function save(Request $request){
    $data=$request->all();
    AddLedgerSubGroupModel::create($data);

}

public function destroy(Request $request){
   $id=$request->post('id'); 
   $data= AddLedgerSubGroupModel::find($id);
   $data->delete();
   }
public function update_form(Request $request){
      $id=$request->id;
      $data['qr']= AddLedgerSubGroupModel::find($id);
      echo view('LedgerSubGroup.UpdateLedgerSubGroup',$data);
   
   }   
 public function update(Request $request){
    $id=$request->id;
    $data= AddLedgerSubGroupModel::find($id);
    $data->id=$request->id;
    $data->ledger_sub_group_name=$request->ledger_sub_group_name;
    $data->ledger_sub_group_date=$request->ledger_sub_group_date;
    $data->ledger_sub_group_parent_id=$request->ledger_sub_group_parent_id;
    $data->_token=$request->_token;
    $data->save();

}
    
}
