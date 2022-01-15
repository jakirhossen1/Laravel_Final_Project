<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\AddLedgerGroupModel;
use App\Models\AddGroupModel;
use DB;
use PDF;

class AddLedgerGroupController extends Controller{
   private $title="Accounting Software";


public function viewd(){
    
    $vi['title']=$this->title;
    $vi['qr']= AddLedgerGroupModel::get();
    $vi['gt']= AddGroupModel::get();
    
    echo view('header.header',$vi);
    echo view('sidebar.sidebar');
    echo view('dashboard.submain');
    echo view('LedgerGroup.AddLedgerGroup',$vi);
    echo view('footer.footer');
}

public function pdf(){
    
    $vi['title']=$this->title;
    $vi['qr']= AddLedgerGroupModel::get();
    

$pdf = PDF::loadView('LedgerGroup.pdf', $vi);
    return $pdf->stream('PWAD Users List.pdf');

}
public function print(){
    
    $vi['title']=$this->title;
    $vi['qr']= AddLedgerGroupModel::get();
    

    echo view('LedgerGroup.print',$vi);

}

public function save(Request $request){
    $data=$request->all();
    AddLedgerGroupModel::create($data);

}

public function destroy(Request $request){
   $id=$request->post('id');
   // dd($id); 
   $data= AddLedgerGroupModel::where('ledger_id','=',$id)->first();
   $data->delete();
   }
public function update_form(Request $request){
      $id=$request->id;
      $data['qr']= AddLedgerGroupModel::where('ledger_id','=',$id)->first();
      $data['gt']= AddGroupModel::get();
      echo view('LedgerGroup.UpdateLedgerGroup',$data);
   
   }
 public function update(Request $request){
    $id=$request->ledger_id;
    $data= AddLedgerGroupModel::where('ledger_id','=',$id)->first();
        $data->ledger_name=$request->ledger_name;
        $data->group_id=$request->group_id;
        $data->_token=$request->_token;
        $data->save();

}
    
}
