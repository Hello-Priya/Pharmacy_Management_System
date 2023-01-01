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
    return view('backend.master');
});

Route::get('/admin_panel',[AdminController::class,'Dashboard'])-> name('Admin');
Route::get('/dashboard_panel',[AdminController::class,'Content'])-> name('dashboard');


Route::get('/Category_list',[CategoryController::class,'list'])-> name('category');
Route::post('/database_list',[CategoryController::class,'Data'])-> name('database');


Route::get('/Create_form',[CategoryController::class,'cform'])-> name('cform');
Route::get('/Delete_form/{id}',[CategoryController::class,'Delete'])-> name('delete');
Route::get('/Edit_form/{id}',[CategoryController::class,'Edit'])-> name('edit');
Route::Put('/Update_form/{id}',[CategoryController::class,'Update'])-> name('update');