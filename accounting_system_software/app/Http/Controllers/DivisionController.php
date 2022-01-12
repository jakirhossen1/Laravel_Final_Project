<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\DivisionModel;
use DB;

class DivisionController extends Controller{
   private $title="PWAD Web Admin Panel";


public function viewd(){
    
    $vi['title']=$this->title;
    $vi['qr']= DivisionModel::get();
    
    echo view('header.header',$vi);
    echo view('sidebar.sidebar');
    echo view('topbar.top');
    echo view('division.view',$vi);
    echo view('footer.footer');
}

public function save(Request $request){
    $data=$request->all();
    DivisionModel::create($data);

}

public function destroy(Request $request){
   $id=$request->post('id'); 
//   dd($id);
//   exit();
   $data= DivisionModel::find($id);
   $data->delete();
   }
   public function update(Request $request){
    $id=$request->id;
    
    $data= DivisionModel::find($id);
    $data->id=$request->id;
    $data->division_name=$request->division_name;
    $data->save();
//    dd($data);
    

}
   
 
    
}
