<?php

namespace App\Http\Controllers\backend;

use App\Models\Company;
use App\Models\Product;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function Med_Product(){

        $companies=Company::all();
        return view('backend.pages.Product.create',compact('companies'));

    }

    public function Product(Request $request){

        $fileName = null;
        if($request->hasFile('Product_image')){
                $fileName = 'Kodeeo'.'_'.date('Ymdhmsis').'.'.$request->file('Product_image')->getClientOriginalExtension();
                // dd($fileName);
                $request->file('Product_image')->storeAs('/uploads/product',$fileName);
        }

    Product::create([

        'SL_NO' => $request->SL_NO,
        'Name' => $request->Name,
        'company_id'=>$request->company_id,
        'Type' => $request->Type,
        'Price' => $request->Price,
        'Product_Details' => $request->Product_Details,
        'Product_image' =>$fileName

    ]);
    return redirect(url('view_table'));

}

public function View(){
    $ProductStore = Product::paginate(3);
    return view('backend.pages.Product.productList',compact('ProductStore'));

}

public function product_delete($id){
    Product::find($id)->delete();


    return back();
}

public function Edit_form($id){
    $ProductEdit = Product::find($id);
   return view('backend.pages.Product.updateForm',compact('ProductEdit'));

}

public function Update_form(Request $request , $id){
    $ProductUpdate = Product::find($id);
    $ProductUpdate->update([
     
    
        'SL_NO' => $request->SL_NO,
        'Name' => $request->Name,
        'Type' => $request->Type,
        'Price' => $request->Price,
        'Product_Details' => $request->Product_Details,
        
    ]);
    return redirect(url('view_table'));


}
}