<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\AddVoucherModel;
use DB;
use PDF;

class DateWiseReportController extends Controller{
   private $title="Accounting Software";


public function viewd(){
    
    $vi['title']=$this->title;
    $vi['qr']= AddVoucherModel::get();
    
    echo view('header.header',$vi);
    echo view('sidebar.sidebar');
    echo view('dashboard.submain');
    echo view('Reports.DateWiseReport',$vi);
    echo view('footer.footer');
}
public function date_wise_report(Request $request){
    $start=$request->start;
    $end=$request->end;
   // dd($request->all());
   $x=AddVoucherModel::all()->wherebetween('voucher_date',[$start,$end])->count();
   


}

}
