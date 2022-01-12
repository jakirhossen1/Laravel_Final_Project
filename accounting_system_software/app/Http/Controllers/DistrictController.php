<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\DivisionModel;
use App\Models\DistrictModel;
use DB;

class DistrictController extends Controller{
   private $title="PWAD Web Admin Panel";
   private $ab="Hello";
public function viewd(){
    
    $vi['title']=$this->title;
    $vi['dv']= DivisionModel::get();
    $vi['dr']= DistrictModel::join('division','district.id','=','division.id')
                             ->OrderBy('district','ASC')
                             ->get();
    
    echo view('header.header',$vi);
    echo view('sidebar.sidebar');
    echo view('topbar.top');
    echo view('district.view',$vi);
    echo view('footer.footer');
}

public function save(Request $request){
    $data=$request->all();
    DistrictModel::create($data);

}

public function destroy(Request $request){
   $id=$request->post('id'); 
   $data= DistrictModel::find($id);
   $data->delete();
   }
   public function update(Request $request){
    $id=$request->id;
    
    $data= DistrictModel::find($id);
    $data->did=$request->id;
    $data->district=$request->district;
    $data->save();
//    dd($data);
    

}
   
 
    
}
