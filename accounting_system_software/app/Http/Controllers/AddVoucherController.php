<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\AddVoucherModel;
use App\Models\AddCompanyModel;
use App\Models\AddGroupModel;
use App\Models\AddLedgerSubGroupModel;
use App\Models\AddLedgerPostingHeadModel;
use App\Models\UsersModel;
use DB;
use PDF;

class AddVoucherController extends Controller{
   private $title="Accounting Software";


public function viewd(){
    
    $vi['title']=$this->title;
    $vi['qr']= AddVoucherModel::get();
    $vi['cn']= AddCompanyModel::get();
    $vi['gn']= AddGroupModel::get();
    $vi['lsgn']= AddLedgerSubGroupModel::get();
    $vi['lphn']= AddLedgerPostingHeadModel::get();
    $vi['un']= UsersModel::get();
    
    echo view('header.header',$vi);
    echo view('sidebar.sidebar');
    echo view('dashboard.submain');
    echo view('AddVoucher.AddVoucher',$vi);
    echo view('footer.footer');
}

public function pdf(){
    
    $vi['title']=$this->title;
    $vi['qr']= AddVoucherModel::get();
    

$pdf = PDF::loadView('AddVoucher.PdfVoucher', $vi);
    return $pdf->stream('PWAD Users List.pdf');

}
public function print(){
    
    $vi['title']=$this->title;
    $vi['qr']= AddVoucherModel::get();
    

    echo view('AddVoucher.PrintVoucher',$vi);

}

public function save(Request $request){
    $data=$request->all();
    AddVoucherModel::create($data);

}

public function destroy(Request $request){
   $id=$request->post('id'); 
   $data= AddVoucherModel::where('sl_no','=',$id)->first();
   $data->delete();
   }
public function update_form(Request $request){
      $id=$request->id;
      $data['qr']= AddVoucherModel::where('sl_no','=',$id)->first();
      $data['cn']= AddCompanyModel::get();
      $data['gn']= AddGroupModel::get();
      $data['lsgn']= AddLedgerSubGroupModel::get();
      $data['lphn']= AddLedgerPostingHeadModel::get();
      $data['un']= UsersModel::get();
      echo view('AddVoucher.UpdateVoucher',$data);
   
   }   
 public function update(Request $request){
    $id=$request->sl_no;
    $data= AddVoucherModel::where('sl_no','=',$id)->first();
    $data->sl_no=$request->sl_no;
    $data->voucher_no=$request->voucher_no;
    $data->voucher_date=$request->voucher_date;
    $data->voucher_description=$request->voucher_description;
    $data->group_id=$request->group_id;
    $data->sub_group_id=$request->sub_group_id;
    $data->postling_head_id=$request->postling_head_id;
    $data->debit_amount=$request->debit_amount;
    $data->credit_amount=$request->credit_amount;
    $data->user_id=$request->user_id;
    $data->entry_date_and_time=$request->entry_date_and_time;
    $data->company_id=$request->company_id;
    $data->voucher_document=$request->voucher_document;
    $data->check_no=$request->check_no;
    $data->check_date=$request->check_date;
    $data->voucher_type=$request->voucher_type;
    $data->prepared_by=$request->prepared_by;
    $data->checked_by=$request->checked_by;
    $data->approved_by=$request->approved_by;
    $data->modify_count=$request->modify_count;
    $data->voucher_status=$request->voucher_status;
    $data->_token=$request->_token;
    $data->save();

}
    
}
