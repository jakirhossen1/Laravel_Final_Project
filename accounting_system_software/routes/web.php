<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\DivisionController;
use App\Http\Controllers\DistrictController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AddCountryController;
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
// Route::get('us_pdf',[AddCountryController::class,'pdf']);
// Route::get('us_print',[AddCountryController::class,'print']);
Route::post('country_save',[AddCountryController::class,'save']);
Route::post('country_del',[AddCountryController::class,'destroy']);
Route::get('country_update_form',[AddCountryController::class,'update_form']);
Route::post('country_update',[AddCountryController::class,'update']);

// End AddCountryController 
