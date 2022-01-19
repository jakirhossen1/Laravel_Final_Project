<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UsersModel;
use App\Models\AddVoucherModel;


class DasboardController extends Controller

{
    private $title="Accounting Software";
    

    public function dasboard(){

    $user=UsersModel::all()->count();
    $debit=AddVoucherModel::select('debit_amount')->sum('debit_amount');
    $credit=AddVoucherModel::select('credit_amount')->sum('credit_amount');
    $vi['title']=$this->title;
    echo view('header.header',$vi);
    echo view('sidebar.sidebar');
    echo view('dashboard.submain');
    echo view('dashboard.dasboard',compact('user','debit','credit'));
    echo view('footer.footer');
        
    }
}
