<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\AdminController;
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

Route::get('/admin_panel',[AdminController::class,'Dashboard']);
Route::get('/dashboard_panel',[AdminController::class,'Content']);
