<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Phurchase;

class PurchaseController extends Controller
{

    public function Manufactures(){
        return view('backend.pages.purchaseForm-m.createform');
    
    }

public function Purchase(Request $request){

    Phurchase::create([

        'ID' => $request->ID,
        'Name' => $request->Name,
        'Address' => $request->Address,
        'Amount' => $request->Amount,
        'Quantity' => $request->Quantity,
        

    ]);
    return back();

}

public function Purchase_view(){
    $Purchases = Phurchase::all();
    return view('backend.pages.purchaseForm-m.purchaseList',compact('Purchases'));
}
}