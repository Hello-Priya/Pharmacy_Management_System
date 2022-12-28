<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\backend\CategoryController;
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

Route::get('/', function () {
    return view('master');
});

Route::get('/admin_panel',[AdminController::class,'Dashboard'])-> name('Admin');
Route::get('/dashboard_panel',[AdminController::class,'Content'])-> name('dashboard');


Route::get('/Category_list',[CategoryController::class,'list'])-> name('category');
Route::post('/database_list',[CategoryController::class,'Data'])-> name('database');


Route::get('/Create_form',[CategoryController::class,'cform'])-> name('cform');

//Route::post('/View_table',[CategoryController::class,'View'])-> name('View');
//Route::get('/Delete_form',[CategoryController::class,'Delete'])-> name('delete');
//Route::Put('/Update_form',[CategoryController::class,'Update'])-> name('update');