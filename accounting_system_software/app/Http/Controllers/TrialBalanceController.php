<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\AddVoucherModel;
use DB;
use PDF;

class TrialBalanceController extends Controller{
   private $title="Accounting Software";


public function viewd(){
    
    $vi['title']=$this->title;
    $vi['qr']= AddVoucherModel::get();
    $vi['trialData'] = AddVoucherModel::get();
    
    echo view('header.header',$vi);
    echo view('sidebar.sidebar');
    echo view('dashboard.submain');
    echo view('TrialBalance.TrialBalance',$vi);
    echo view('footer.footer');
}


public function pdf(){
    
    $vi['title']=$this->title;
    $vi['qr']= AddVoucherModel::get();
    $vi['trialData'] = AddVoucherModel::get();
    

$pdf = PDF::loadView('TrialBalance.pdf', $vi);
    return $pdf->stream('PWAD Users List.pdf');

}
public function print(){
    
    $vi['title']=$this->title;
    $vi['qr']= AddVoucherModel::get();
    $vi['trialData'] = AddVoucherModel::get();
    

    echo view('TrialBalance.print',$vi);

}


}
