<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\AddCountryModel;
use DB;
use PDF;

class AddCountryController extends Controller{
   private $title="Accounting Software";


public function viewd(){
    
    $vi['title']=$this->title;
    $vi['qr']= AddCountryModel::get();
    
    echo view('header.header',$vi);
    echo view('sidebar.sidebar');
    echo view('dashboard.submain');
    echo view('AddCountry.AddCountry',$vi);
    echo view('footer.footer');
}

public function pdf(){
    
    $vi['title']=$this->title;
    $vi['qr']= AddCountryModel::get();
    

$pdf = PDF::loadView('AddCountry.pdf', $vi);
    return $pdf->stream('PWAD Users List.pdf');

}
public function print(){
    
    $vi['title']=$this->title;
    $vi['qr']= AddCountryModel::get();
    

    echo view('AddCountry.print',$vi);

}

public function save(Request $request){
    $data=$request->all();
    AddCountryModel::create($data);

}

public function destroy(Request $request){
   $id=$request->post('id'); 
   $data= AddCountryModel::find($id);
   $data->delete();
   }
public function update_form(Request $request){
      $id=$request->id;
      $data['qr']= AddCountryModel::find($id);
      echo view('AddCountry.UpdateCountry',$data);
   
   }   
 public function update(Request $request){
    $id=$request->id;
    
    $data= AddCountryModel::find($id);
    $data->id=$request->id;
    $data->city_name=$request->city_name;
    $data->country_name=$request->country_name;
    $data->save();

}
    
}
