<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\DivisionController;
use App\Http\Controllers\DistrictController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AddCountryController;
use App\Http\Controllers\AddBusinessTypeController;
use App\Http\Controllers\AddCompanyTypeController;
use App\Http\Controllers\AddGroupController;
use App\Http\Controllers\AddLedgerGroupController;
use App\Http\Controllers\AddLedgerSubGroupController;
use App\Http\Controllers\AddLedgerPostingHeadController;
use App\Http\Controllers\AddBudgetController;
use App\Http\Controllers\AddVoucherController;
use App\Http\Controllers\AddCompanyController;
use App\Http\Controllers\ProfileViewController;
use App\Http\Controllers\DateWiseReportController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[UserController::class,'viewd']);

// Start ProfileViewController

Route::get('pv',[ProfileViewController::class,'viewd']);
Route::get('pv_pdf',[ProfileViewController::class,'pdf']);
Route::get('pv_print',[ProfileViewController::class,'print']);

// End ProfileViewController


//Start DateWiseReportController

Route::get('dr',[DateWiseReportController::class,'viewd']);
Route::post('dr_report',[DateWiseReportController::class,'date_wise_report']);


//End DateWiseReportController




//Start UserController


Route::get('us',[UserController::class,'viewd']);
Route::get('us_pdf',[UserController::class,'pdf']);
Route::get('us_print',[UserController::class,'print']);
Route::post('us_save',[UserController::class,'save']);
Route::post('us_del',[UserController::class,'destroy']);
Route::get('us_update_form',[UserController::class,'update_form']);
Route::post('us_update',[UserController::class,'update']);


//End UserController


// Start LoginController


Route::get('login',[LoginController::class,'viewd']);
Route::post('authen',[LoginController::class,'authentiation']);
Route::get('lout',[LoginController::class,'logout']);


// End LoginController

//Start AddCountryController 

Route::get('country',[AddCountryController::class,'viewd']);
Route::get('country_pdf',[AddCountryController::class,'pdf']);
Route::get('country_print',[AddCountryController::class,'print']);
Route::post('country_save',[AddCountryController::class,'save']);
Route::post('country_del',[AddCountryController::class,'destroy']);
Route::get('country_update_form',[AddCountryController::class,'update_form']);
Route::post('country_update',[AddCountryController::class,'update']);

// End AddCountryController 


//Start AddBusinessTypeController 

Route::get('business',[AddBusinessTypeController::class,'viewd']);
Route::get('business_pdf',[AddBusinessTypeController::class,'pdf']);
Route::get('business_print',[AddBusinessTypeController::class,'print']);
Route::post('business_save',[AddBusinessTypeController::class,'save']);
Route::post('business_del',[AddBusinessTypeController::class,'destroy']);
Route::get('business_update_form',[AddBusinessTypeController::class,'update_form']);
Route::post('business_update',[AddBusinessTypeController::class,'update']);

// End AddBusinessTypeController 


//Start AddBusinessTypeController 

Route::get('companytype',[AddCompanyTypeController::class,'viewd']);
Route::get('companytype_pdf',[AddCompanyTypeController::class,'pdf']);
Route::get('companytype_print',[AddCompanyTypeController::class,'print']);
Route::post('companytype_save',[AddCompanyTypeController::class,'save']);
Route::post('companytype_del',[AddCompanyTypeController::class,'destroy']);
Route::get('companytype_update_form',[AddCompanyTypeController::class,'update_form']);
Route::post('companytype_update',[AddCompanyTypeController::class,'update']);

// End AddCompanyTypeController 



//Start AddGroupController 

Route::get('grouptype',[AddGroupController::class,'viewd']);
Route::get('grouptype_pdf',[AddGroupController::class,'pdf']);
Route::get('grouptype_print',[AddGroupController::class,'print']);
Route::post('grouptype_save',[AddGroupController::class,'save']);
Route::post('grouptype_del',[AddGroupController::class,'destroy']);
Route::get('grouptype_update_form',[AddGroupController::class,'update_form']);
Route::post('grouptype_update',[AddGroupController::class,'update']);

// End AddGroupController 


//Start AddLedgerGroupController 

Route::get('ledgergroup',[AddLedgerGroupController::class,'viewd']);
Route::get('ledgergroup_pdf',[AddLedgerGroupController::class,'pdf']);
Route::get('ledgergroup_print',[AddLedgerGroupController::class,'print']);
Route::post('ledgergroup_save',[AddLedgerGroupController::class,'save']);
Route::post('ledgergroup_del',[AddLedgerGroupController::class,'destroy']);
Route::get('ledgergroup_update_form',[AddLedgerGroupController::class,'update_form']);
Route::post('ledgergroup_update',[AddLedgerGroupController::class,'update']);

// End AddLedgerGroupController 




// Start  AddLedgerSubGroupController 

Route::get('lsg',[AddLedgerSubGroupController::class,'viewd']);
Route::get('lsg_pdf',[AddLedgerSubGroupController::class,'pdf']);
Route::get('lsg_print',[AddLedgerSubGroupController::class,'print']);
Route::post('lsg_save',[AddLedgerSubGroupController::class,'save']);
Route::post('lsg_del',[AddLedgerSubGroupController::class,'destroy']);
Route::get('lsg_update_form',[AddLedgerSubGroupController::class,'update_form']);
Route::post('lsg_update',[AddLedgerSubGroupController::class,'update']);

// End AddLedgerSubGroupController


//Start AddLedgerPostingHeadController 

Route::get('lph',[AddLedgerPostingHeadController::class,'viewd']);
Route::get('lph_pdf',[AddLedgerPostingHeadController::class,'pdf']);
Route::get('lph_print',[AddLedgerPostingHeadController::class,'print']);
Route::post('lph_save',[AddLedgerPostingHeadController::class,'save']);
Route::post('lph_del',[AddLedgerPostingHeadController::class,'destroy']);
Route::get('lph_update_form',[AddLedgerPostingHeadController::class,'update_form']);
Route::post('lph_update',[AddLedgerPostingHeadController::class,'update']);

// End AddLedgerPostingHeadController



//Start AddBudgetController 

Route::get('bg',[AddBudgetController::class,'viewd']);
Route::get('bg_pdf',[AddBudgetController::class,'pdf']);
Route::get('bg_print',[AddBudgetController::class,'print']);
Route::post('bg_save',[AddBudgetController::class,'save']);
Route::post('bg_del',[AddBudgetController::class,'destroy']);
Route::get('bg_update_form',[AddBudgetController::class,'update_form']);
Route::post('bg_update',[AddBudgetController::class,'update']);

// End AddBudgetController



//Start AddVoucherController 

Route::get('vcl',[AddVoucherController::class,'viewd']);
Route::get('vcl_pdf',[AddVoucherController::class,'pdf']);
Route::get('vcl_print',[AddVoucherController::class,'print']);
Route::post('vcl_save',[AddVoucherController::class,'save']);
Route::post('vcl_del',[AddVoucherController::class,'destroy']);
Route::get('vcl_update_form',[AddVoucherController::class,'update_form']);
Route::post('vcl_update',[AddVoucherController::class,'update']);

// End AddVoucherController




//Start AddCompanyController 

Route::get('ac',[AddCompanyController::class,'viewd']);
Route::get('ac_pdf',[AddCompanyController::class,'pdf']);
Route::get('ac_print',[AddCompanyController::class,'print']);
Route::post('ac_save',[AddCompanyController::class,'save']);
Route::post('ac_del',[AddCompanyController::class,'destroy']);
Route::get('ac_update_form',[AddCompanyController::class,'update_form']);
Route::post('ac_update',[AddCompanyController::class,'update']);

// End AddCompanyController