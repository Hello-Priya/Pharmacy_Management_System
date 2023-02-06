<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\backend\PurchaseController;
use App\Http\Controllers\Auth\AuthController;
use Illuminate\Routing\Controllers\Middleware;
use App\Http\Controllers\backend\CompanyController;
use App\Http\Controllers\backend\CustomerController;
use App\Http\Controllers\backend\PaymentController;
use App\Http\Controllers\backend\StockController;
use App\Http\Controllers\backend\ReportController;
use App\Http\Controllers\backend\SaleController;

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


Route::get('/registration_form',[AuthController::class,'registration_form'])->name('registration.form');
Route::post('/registration_form_submit',[AuthController::class,'registration_form_submit'])->name('registration_form_submit');


Route::get('/login_form',[AuthController::class,'Login'])->name('login');
Route::POST('/login_form-submit',[AuthController::class,'Login_submit'])->name('login.submit');

Route::group(['Middleware'=>'CheckAdmin'],function(){

 Route::get('/logout',[AuthController::class,'logout'])-> name('logout');

Route::get('/', function () {
    return view('backend.master');
});

Route::get('/admin_panel',[AdminController::class,'Dashboard'])-> name('Admin');
Route::get('/dashboard_panel',[AdminController::class,'Content'])-> name('dashboard');

                                            //category:

Route::get('/Category_list',[CategoryController::class,'list'])-> name('category');
Route::post('/database_list',[CategoryController::class,'Data'])-> name('database_submit');

Route::get('/create_form',[CategoryController::class,'create'])-> name('create');
Route::get('/Delete_form/{id}',[CategoryController::class,'Delete'])-> name('delete-form');
Route::get('/Edit_form/{id}',[CategoryController::class,'Edit'])-> name('edit');
Route::put('/Update_form/{id}',[CategoryController::class,'Update'])-> name('update');


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
Route::get('/Purchase_deleteForm/{id}',[PurchaseController::class,'Purchase_deleteForm'])-> name('Purchase_deleteForm');
Route::get('/Purchase_EditForm/{id}',[PurchaseController::class,'Purchase_EditForm'])-> name('Purchase_EditForm');
Route::put('/Purchase_updateForm/{id}',[PurchaseController::class,'Purchase_updateForm'])-> name('Purchase_updateForm');

                                    //Company/brand:

Route::get('/company_medicine_form',[CompanyController::class,'Company'])-> name('company');
Route::post('/database_form-submit',[CompanyController::class,'form_submit'])-> name('form-submit');

Route::get('/Create_form',[CompanyController::class,'create_form'])-> name('Create-form');
Route::get('/Delete_Form/{id}',[CompanyController::class,'delete_form_submit'])-> name('delete-submit');
Route::get('/update_Form/{id}',[CompanyController::class,'update_form'])-> name('update-form');
Route::put('/update_Form_Submit/{id}',[CompanyController::class,'update_form_submit'])-> name('update-form-submit');


                                    //Customer:
Route::get('/customer_Create',[CustomerController::class,'Customer_form'])->name('customer');
Route::post('/customer_Create-submit',[CustomerController::class,'Customer_form_submit'])->name('customer_submit');                          

Route::get('/viewForm',[CustomerController::class,'View_form'])-> name('viewform');
Route::get('/delete/{id}',[CustomerController::class,'form_delete'])-> name('form_delete');
Route::get('/UpdateForm/{id}',[CustomerController::class,'update'])-> name('update');
Route::put('/Updatesubmit/{id}',[CustomerController::class,'update_submit'])-> name('update-submit');

                                    //Payment:
Route::get('/createForm',[PaymentController::class,'create_form'])-> name('create_form');
Route::post('/createForm_submit',[PaymentController::class,'create_form_submit'])-> name('create_form-submit');

Route::get('/view_form',[PaymentController::class,'view_form'])-> name('view_form');
Route::get('/delete_Form/{id}',[PaymentController::class,'delete_form'])-> name('delete_form');
Route::get('/editForm/{id}',[PaymentController::class,'edit_form'])-> name('edit_form');
Route::put('/Update_submit/{id}',[PaymentController::class,'Update_submit'])-> name('Update_submit');


                                                            //Stoke:
Route::get('/stokeForm',[StockController::class,'Stoke'])->name('stoke');                                                            
Route::POST('/database_stokeForm',[StockController::class,'Database_form'])->name('Database_form');                                                            

Route::get('/stoke_create',[StockController::class,'stoke_create'])->name('stoke_create');                                                            
Route::get('/stoke_delete/{id}',[StockController::class,'stoke_delete'])->name('stoke_delete');                                                      
Route::get('/stoke_edit/{id}',[StockController::class,'stokeEdit'])->name('stoke_edit');
Route::put('/stoke_update/{id}',[StockController::class,'stoke_update'])->name('stoke_update');


                                            //Report:

 Route::get('/reportForm',[ReportController::class,'Report_form'])->name('report_form');
 Route::post('/database-report_Form',[ReportController::class,'database_Report_form'])->name('database_report_form');

 Route::get('/Report_create',[ReportController::class,'Report_Create'])->name('report_create');
 Route::get('/Report_delete/{id}',[ReportController::class,'Report_Delete'])->name('report_delete');
 Route::get('/Report_edit/{id}',[ReportController::class,'Report_Edit'])->name('report_edit');
 Route::put('/Report_update/{id}',[ReportController::class,'Report_Update'])->name('report_update');
                         

                                                //Sale:

Route::get('/saleForm',[SaleController::class,'sale_form'])->name('sale_form');
Route::post('/database_saleForm',[SaleController::class,'database_sale_form'])->name('database_sale_form');                                                  

Route::get('/Sale_create',[SaleController::class,'Sale_Create'])->name('Sale_Create');                                                  
Route::get('/Sale-delete/{id}',[SaleController::class,'Sale_delete'])->name('Sale_delete');                                                  
Route::get('/Sale-view/{id}',[SaleController::class,'Sale_view'])->name('Sale_view');                                                  
Route::put('/Sale-update/{id}',[SaleController::class,'Sale_update'])->name('Sale_update');                                                  




});

