<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\AddBudgetModel;
use DB;
use PDF;

class AddBudgetController extends Controller{
   private $title="Accounting Software";


public function viewd(){
    
    $vi['title']=$this->title;
    $vi['qr']= AddBudgetModel::get();
    
    echo view('header.header',$vi);
    echo view('sidebar.sidebar');
    echo view('dashboard.submain');
    echo view('Budget.AddBudget',$vi);
    echo view('footer.footer');
}

public function pdf(){
    
    $vi['title']=$this->title;
    $vi['qr']= AddBudgetModel::get();
    

$pdf = PDF::loadView('Budget.pdf', $vi);
    return $pdf->stream('PWAD Users List.pdf');

}
public function print(){
    
    $vi['title']=$this->title;
    $vi['qr']= AddBudgetModel::get();
    

    echo view('Budget.print',$vi);

}

public function save(Request $request){
    $data=$request->all();
    AddBudgetModel::create($data);

}

public function destroy(Request $request){
   $id=$request->post('id'); 
   $data= AddBudgetModel::where('budget_id','=',$id)->first();
   $data->delete();
   }
public function update_form(Request $request){
      $id=$request->id;
      $data['qr']= AddBudgetModel::where('budget_id','=',$id)->first();
      echo view('Budget.UpdateBudget',$data);
   
   }   
 public function update(Request $request){
    $id=$request->budget_id;
    $data= AddBudgetModel::where('budget_id','=',$id)->first();
    $data->budget_id=$request->budget_id;
    $data->group_id=$request->group_id;
    $data->sub_group_id=$request->sub_group_id;
    $data->posting_head_id=$request->posting_head_id;
    $data->budget_type=$request->budget_type;
    $data->month=$request->month;
    $data->amount=$request->amount;
    $data->user_id=$request->user_id;
    $data->date_time=$request->date_time;
    $data->creation_date=$request->creation_date;
    $data->_token=$request->_token;
    $data->save();

}
    
}
