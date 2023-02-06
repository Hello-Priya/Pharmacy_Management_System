<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Sale;
use Illuminate\Http\Request;

class SaleController extends Controller
{

    public function sale_form(){
        return view('backend.pages.sale.create');
    }
    
    public function database_sale_form(Request $request){
        
        Sale::create([

            'Add to Cart' =>$request->Add_to_Cart,
            'Order' =>$request->Order,
            'Order_Place' =>$request->Order_Place,
            'Payment' =>$request->Payment,
            'Discount' =>$request->Discount
          
        ]);
        return redirect(url('Sale_create'));
    }

    public function Sale_Create(){
        $Sales = Sale::all();
        return view('backend.pages.sale.edit',compact('Sales'));
    }

    public function Sale_delete($id){
        Sale::find($id)->delete();

        return back();

    }

    public function Sale_view($id){
        $SaleEdit = Sale::find($id);
        return view('backend.pages.sale.update',compact('SaleEdit'));


    }

    public function Sale_update(Request $request ,$id){
        $SaleUpdate = Sale::find($id);
        $SaleUpdate->update([

            'Add to Cart' =>$request->Add_to_Cart,
            'Order' =>$request->Order,
            'Order_Place' =>$request->Order_Place,
            'Payment' =>$request->Payment,
            'Discount' =>$request->Discount
        ]);

        return redirect(url('Sale_create'));
    }
}
