<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\AddLedgerPostingHeadModel;
use DB;
use PDF;

class AddLedgerPostingHeadController extends Controller{
   private $title="Accounting Software";


public function viewd(){
    
    $vi['title']=$this->title;
    $vi['qr']= AddLedgerPostingHeadModel::get();
    
    echo view('header.header',$vi);
    echo view('sidebar.sidebar');
    echo view('dashboard.submain');
    echo view('AddLedgerPostingHead.AddLedgerPostingHead',$vi);
    echo view('footer.footer');
}

// public function pdf(){
    
//     $vi['title']=$this->title;
//     $vi['qr']= AddLedgerPostingHeadModel::get();
    

// $pdf = PDF::loadView('users.pdf', $vi);
//     return $pdf->stream('PWAD Users List.pdf');

// }
// public function print(){
    
//     $vi['title']=$this->title;
//     $vi['qr']= AddLedgerPostingHeadModel::get();
    

//     echo view('users.print',$vi);

// }

public function save(Request $request){
    $data=$request->all();
    AddLedgerPostingHeadModel::create($data);

}

public function destroy(Request $request){
   $id=$request->post('id');
   $data= AddLedgerPostingHeadModel::where('ledger_posting_head_id','=',$id)->first();
   $data->delete();
   }
public function update_form(Request $request){
      $id=$request->id;
      $data['qr']= AddLedgerPostingHeadModel::where('ledger_posting_head_id','=',$id)->first();
      echo view('AddLedgerPostingHead.UpdateLedgerPostingHead',$data);
   
   }
 public function update(Request $request){
    $id=$request->ledger_posting_head_id;
    $data= AddLedgerPostingHeadModel::where('ledger_posting_head_id','=',$id)->first();
        $data->ledger_sub_group_id=$request->ledger_sub_group_id;
        $data->ledger_group_id=$request->ledger_group_id;
        $data->posting_head_name=$request->posting_head_name;
        $data->posting_head_date=$request->posting_head_date;
        $data->status=$request->status;
        $data->_token=$request->_token;
        $data->save();

}
    
}
