<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\CategoryList;

class CategoryController extends Controller
{
  public function list(){
    return view('backend.pages.category.Category_list');
  }
  
  public function Data(Request $request){
    //dd($request->all());
    
    CategoryList::create([

        'SL_NO' => $request->SL_NO,
        'Name' => $request->Name,
        'Type' => $request->Type,
        'Amount' => $request->Amount,
        'In_Stock' => $request->In_Stock,
        'Stock_Out' => $request->Stock_Out,
    ]);

    return redirect()->back();
}


  public function cform(){
    $Customers = CategoryList::all();
    return view('backend.pages.category.Cform',compact('Customers'));
  }
}
