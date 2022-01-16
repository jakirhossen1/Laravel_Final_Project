<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\UsersModel;
use DB;
use PDF;

class ProfileViewController extends Controller{
   private $title="Accounting Software";


public function viewd(){
    
    $vi['title']=$this->title;
    $vi['qr']= UsersModel::get();
    
    echo view('header.header',$vi);
    echo view('sidebar.sidebar');
    echo view('dashboard.submain');
    echo view('ProfileView.ProfileView',$vi);
    echo view('footer.footer');
}

public function pdf(){
    
    $vi['title']=$this->title;
    $vi['qr']= UsersModel::get();
    

$pdf = PDF::loadView('ProfileView.pdf', $vi);
    return $pdf->stream('PWAD Users List.pdf');

}
public function print(){
    
    $vi['title']=$this->title;
    $vi['qr']= UsersModel::get();
    

    echo view('ProfileView.print',$vi);

}

    
}
