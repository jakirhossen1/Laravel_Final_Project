<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\AddCompanyModel;
use App\Models\AddCompanyTypeModel;
use App\Models\AddBusinessTypeModel;
use App\Models\AddCountryModel;
use DB;
use PDF;

class AddCompanyController extends Controller{
   private $title="Accounting Software";


public function viewd(){
    
    $vi['title']=$this->title;
    $vi['qr']= AddCompanyModel::get();
    $vi['type']=AddCompanyTypeModel::get();
    $vi['business']=AddBusinessTypeModel::get();
    $vi['country']=AddCountryModel::get();
    
    
    echo view('header.header',$vi);
    echo view('sidebar.sidebar');
    echo view('dashboard.submain');
    echo view('AddCompany.AddCompany',$vi);
    echo view('footer.footer');
}

public function pdf(){
    
    $vi['title']=$this->title;
    $vi['qr']= AddCompanyModel::get();
    

$pdf = PDF::loadView('AddCompany.PdfCompany', $vi);
    return $pdf->stream('PWAD Users List.pdf');

}
public function print(){
    
    $vi['title']=$this->title;
    $vi['qr']= AddCompanyModel::get();
    

    echo view('AddCompany.PrintCompany',$vi);

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
        $data=new AddCompanyModel();
        $data->company_type=$request->company_type;
        $data->business_type=$request->business_type;
        $data->country=$request->country;
        $data->company_name=$request->company_name;
        $data->address=$request->address;
        $data->phone=$request->phone;
        $data->company_registration_no=$request->company_registration_no;
        $data->registration_doc=$request->registration_doc;
        $data->tin=$request->tin;
        $data->tin_doc=$request->tin_doc;
        $data->vat=$request->vat;
        $data->vat_doc=$request->vat_doc;
        $data->trade_license=$request->trade_license;
        $data->picture=$path.$img->getClientOriginalName();
        $data->_token=$request->_token;
        $data->save();
        
    }else{
          $data=$request->all();
          AddCompanyModel::create($data);
    }

}

public function destroy(Request $request){
   $id=$request->post('id');
   // dd($id); 
   $data= AddCompanyModel::where('company_id','=',$id)->first();
   $data->delete();
   }
public function update_form(Request $request){
      $id=$request->id;
      $data['qr']= AddCompanyModel::where('company_id','=',$id)->first();
      $data['type']=AddCompanyTypeModel::get();
      $data['business']=AddBusinessTypeModel::get();
      $data['country']=AddCountryModel::get();
      echo view('AddCompany.UpdateCompany',$data);
   
   }
public function update(Request $request){
     $id=$request->company_id;
   if($request->file('picture')){
        $img=$request->file('picture');
        $img->getClientOriginalName();
        $img->getClientOriginalExtension();
        $img->getRealPath();
        $img->getMimeType();
        $img->getSize();
        $path="assets/upload/";
        $img->move($path,$img->getClientOriginalName());
        $data= AddCompanyModel::where('company_id','=',$id)->first();
        $data->company_type=$request->company_type;
        $data->business_type=$request->business_type;
        $data->country=$request->country;
        $data->company_name=$request->company_name;
        $data->address=$request->address;
        $data->phone=$request->phone;
        $data->company_registration_no=$request->company_registration_no;
        $data->registration_doc=$request->registration_doc;
        $data->tin=$request->tin;
        $data->tin_doc=$request->tin_doc;
        $data->vat=$request->vat;
        $data->vat_doc=$request->vat_doc;
        $data->trade_license=$request->trade_license;
        $data->picture=$path.$img->getClientOriginalName();
        $data->_token=$request->_token;
        $data->save();
        
    }else{
        $data= AddCompanyModel::where('company_id','=',$id)->first();
        $data->company_type=$request->company_type;
        $data->business_type=$request->business_type;
        $data->country=$request->country;
        $data->company_name=$request->company_name;
        $data->address=$request->address;
        $data->phone=$request->phone;
        $data->_token=$request->_token;
        $data->save();
    }
    

}
   
 
    
}