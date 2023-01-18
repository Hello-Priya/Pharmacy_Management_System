<?php

namespace App\Http\Controllers\backend;

use App\Models\Payment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class PaymentController extends Controller
{
    public function create_form(){
        return view('backend.pages.payment.create');
    }

    public function create_form_submit(Request $request){

        Payment::create([
            'Product_Name' => $request->Product_Name,
            'Date' => $request->Date,
            'Amount' => $request->Amount
        ]);
        return redirect(url('view_form'));

    }
    public function view_form(){
        $Payments = Payment::all();
        return view('backend.pages.payment.list',compact('Payments'));
    }

    public function delete_form($id){
       Payment::find($id)->delete(); 

       return back();
    }

    

    public function edit_form($id){
        $Paymentedit = Payment::find($id);
        return view('backend.pages.payment.update',compact('Paymentedit'));
    }

    public function Update_submit(Request $request, $id){
        $Paymentupdate = Payment::find($id);
        $Paymentupdate->update([

            'Product_Name' => $request->Product_Name,
            'Date' => $request->Date,
            'Amount' => $request->Amount
        ]);
        return redirect(url('view_form'));
    }
}
