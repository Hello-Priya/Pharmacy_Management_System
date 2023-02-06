<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Phurchase;

class PurchaseController extends Controller
{

    public function Manufactures(){
        return view('backend.pages.purchase.createform');
    
    }

public function Purchase(Request $request){

    Phurchase::create([

        'ID' => $request->ID,
        'Name' => $request->Name,
        'Address' => $request->Address,
        'Amount' => $request->Amount,
        'Quantity' => $request->Quantity
        

    ]);

    return redirect(url('Purchase_viewForm'));

}

public function Purchase_view(){
    $Purchases = Phurchase::all();
    return view('backend.pages.purchase.purchaseList',compact('Purchases'));
}
public function Purchase_deleteForm($id){
    Phurchase::find($id)->delete();

    return back();
}

public function Purchase_EditForm($id){
    $PurchasesEdit = Phurchase::find($id);

    return view('backend.pages.purchase.purchaseUpdate',compact('PurchasesEdit'));


}
public function Purchase_updateForm(Request $request,$id){
    $PurchasesUpdate = Phurchase::find($id);
    $PurchasesUpdate->update([

        'ID' => $request->ID,
        'Name' => $request->Name,
        'Address' => $request->Address,
        'Amount' => $request->Amount,
        'Quantity' => $request->Quantity


    ]);
    
    return redirect(url('Purchase_viewForm'));
}
}