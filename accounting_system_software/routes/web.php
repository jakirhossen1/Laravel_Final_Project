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


// Start LoginController

//Start AddCountryController 

Route::get('country',[AddCountryController::class,'viewd']);
// Route::get('country_pdf',[AddCountryController::class,'pdf']);
// Route::get('country_print',[AddCountryController::class,'print']);
Route::post('country_save',[AddCountryController::class,'save']);
Route::post('country_del',[AddCountryController::class,'destroy']);
Route::get('country_update_form',[AddCountryController::class,'update_form']);
Route::post('country_update',[AddCountryController::class,'update']);

// End AddCountryController 


//Start AddBusinessTypeController 

Route::get('business',[AddBusinessTypeController::class,'viewd']);
// Route::get('business_pdf',[AddBusinessTypeController::class,'pdf']);
// Route::get('business_print',[AddBusinessTypeController::class,'print']);
Route::post('business_save',[AddBusinessTypeController::class,'save']);
Route::post('business_del',[AddBusinessTypeController::class,'destroy']);
Route::get('business_update_form',[AddBusinessTypeController::class,'update_form']);
Route::post('business_update',[AddBusinessTypeController::class,'update']);

// End AddBusinessTypeController 


//Start AddBusinessTypeController 

Route::get('companytype',[AddCompanyTypeController::class,'viewd']);
// Route::get('companytype_pdf',[AddCompanyTypeController::class,'pdf']);
// Route::get('companytype_print',[AddCompanyTypeController::class,'print']);
Route::post('companytype_save',[AddCompanyTypeController::class,'save']);
Route::post('companytype_del',[AddCompanyTypeController::class,'destroy']);
Route::get('companytype_update_form',[AddCompanyTypeController::class,'update_form']);
Route::post('companytype_update',[AddCompanyTypeController::class,'update']);

// End AddCompanyTypeController 



//Start AddGroupController 

Route::get('grouptype',[AddGroupController::class,'viewd']);
// Route::get('grouptype_pdf',[AddGroupController::class,'pdf']);
// Route::get('grouptype_print',[AddGroupController::class,'print']);
Route::post('grouptype_save',[AddGroupController::class,'save']);
Route::post('grouptype_del',[AddGroupController::class,'destroy']);
Route::get('grouptype_update_form',[AddGroupController::class,'update_form']);
Route::post('grouptype_update',[AddGroupController::class,'update']);

// End AddGroupController 