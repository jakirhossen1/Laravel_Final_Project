<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\AddCompanyTypeModel;
use DB;
use PDF;

class AddCompanyTypeController extends Controller{
   private $title="Accounting Software";


public function viewd(){
    
    $vi['title']=$this->title;
    $vi['qr']= AddCompanyTypeModel::get();
    
    echo view('header.header',$vi);
    echo view('sidebar.sidebar');
    echo view('dashboard.submain');
    echo view('AddCompanyType.AddCompanyType',$vi);
    echo view('footer.footer');
}

public function pdf(){
    
    $vi['title']=$this->title;
    $vi['qr']= AddCompanyTypeModel::get();
    

$pdf = PDF::loadView('AddCompanyType.pdf', $vi);
    return $pdf->stream('PWAD Users List.pdf');

}
public function print(){
    
    $vi['title']=$this->title;
    $vi['qr']= AddCompanyTypeModel::get();
    

    echo view('AddCompanyType.print',$vi);

}

public function save(Request $request){
    $data=$request->all();
    AddCompanyTypeModel::create($data);

}

public function destroy(Request $request){
   $id=$request->post('id'); 
   $data= AddCompanyTypeModel::find($id);
   $data->delete();
   }
public function update_form(Request $request){
      $id=$request->id;
      $data['qr']= AddCompanyTypeModel::find($id);
      echo view('AddCompanyType.UpdateCompanyType',$data);
   
   }   
 public function update(Request $request){
    $id=$request->id;
    
    $data= AddCompanyTypeModel::find($id);
    $data->id=$request->id;
    $data->company_type=$request->company_type;
    $data->save();

}
    
}
