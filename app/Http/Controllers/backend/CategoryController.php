<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\CategoryList;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationData;

class CategoryController extends Controller
{
  public function list(){
    return view('backend.pages.category.Category_list');
  }
  
  public function Data(Request $request){
    //dd($request->all());

$request->validate([
 'SL_NO' => 'required',
'Name' => 'required',
'Type' => 'required',
'Amount' => 'required',
'In_Stock' => 'required',
'Stock_Out' => 'required'

]);  
  
    CategoryList::create([

        'SL_NO' => $request->SL_NO,
        'Name' => $request->Name,
        'Type' => $request->Type,
        'Amount' => $request->Amount,
        'In_Stock' => $request->In_Stock,
        'Stock_Out' => $request->Stock_Out,
    ]);

    return redirect(url('create_form'));
}


  public function create(){
    $Customers = CategoryList::paginate(4);
    return view('backend.pages.category.Cform',compact('Customers'));
  }

public function Delete($id){
  CategoryList::find($id)->delete();

  return back();
}

public function Edit($id){
  $CustomerEdit = CategoryList::find($id);
  return view('backend.pages.category.update',compact('CustomerEdit'));
}

public function Update(Request $request , $id){
  $CustomerUpdate = CategoryList::find($id);
  $CustomerUpdate->update([
   
    'SL_NO' => $request->SL_NO,
    'Name' => $request->Name,
    'Type' => $request->Type,
    'Amount' => $request->Amount,
    'In_Stock' => $request->In_Stock,
    'Stock_Out' => $request->Stock_Out
  ]);
  return redirect()->route('create_form'); 

}
}
