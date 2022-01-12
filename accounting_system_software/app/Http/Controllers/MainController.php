<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\CityModel;
use App\Models\DistrictModel;
use App\Models\DivisionModel;
use DB;
use PDF;

class MainController extends Controller{
   private $title="Accounting Software";
public function home(){
    $vi['title']=$this->title;
    echo view('header.header',$vi);
    echo view('sidebar.sidebar');
    echo view('dashboard.main');
    echo view('footer.footer');
    
}

public function save(Request $request){
    $data=$request->all();
    CityModel::create($data);

}

public function destroy(Request $request){
   $id=$request->post('id'); 
//   dd($id);
//   exit();
   $data= CityModel::find($id);
   $data->delete();
   }
   public function update(Request $request){
    $id=$request->id;
    
    $data= CityModel::find($id);
    $data->cid=$request->id;
    $data->city_name=$request->city_name;
    $data->save();
//    dd($data);
    

}
   
 
    
}
