<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\backend\PurchaseController;
use App\Http\Controllers\Auth\AuthController;
use Illuminate\Routing\Controllers\Middleware;

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


Route::get('/registration_form',[AuthController::class,'registration_form'])->name('registration_form');
Route::post('/registration_form_submit',[AuthController::class,'registration_form_submit'])->name('registration_form_submit');


Route::get('/login_form',[AuthController::class,'Login'])->name('login');
Route::POST('/login_form-submit',[AuthController::class,'Login_submit'])->name('login-submit');

Route::group(['Middleware'=>'CheckAdmin'],function(){

 Route::get('/logout',[AuthController::class,'logout'])-> name('logout');

Route::get('/', function () {
    return view('backend.master');
});

Route::get('/admin_panel',[AdminController::class,'Dashboard'])-> name('Admin');
Route::get('/dashboard_panel',[AdminController::class,'Content'])-> name('dashboard');

                                            //category:

Route::get('/Category_list',[CategoryController::class,'list'])-> name('category');
Route::post('/database_list',[CategoryController::class,'Data'])-> name('database');


Route::get('/Create_form',[CategoryController::class,'cform'])-> name('cform');
Route::get('/Delete_form/{id}',[CategoryController::class,'Delete'])-> name('delete');
Route::get('/Edit_form/{id}',[CategoryController::class,'Edit'])-> name('edit');
Route::Put('/Update_form/{id}',[CategoryController::class,'Update'])-> name('update');


                                      //Product:

Route::get('/Product_Form',[ProductController::class,'Med_Product'])-> name('product');
Route::POST('/Database_Product',[ProductController::class,'Product'])-> name('med-product');

Route::get('/view_table',[ProductController::class,'View'])-> name('View');
Route::get('/Delete_data/{id}',[ProductController::class,'product_delete'])-> name('product_delete');
Route::get('/ProductEdit-Form/{id}',[ProductController::class,'Edit_form'])-> name('Product-edit');
Route::Put('/Product_update_Form/{id}',[ProductController::class,'Update_form'])-> name('update_edit');




                                        //Purchase:

Route::get('/Purchase_Form',[PurchaseController::class,'Manufactures'])-> name('Manufactures_form');
Route::POST('/Database_Purchase',[PurchaseController::class,'Purchase'])-> name('Purchase_data');

Route::get('/Purchase_viewForm',[PurchaseController::class,'Purchase_view'])-> name('Purchase_view');








});