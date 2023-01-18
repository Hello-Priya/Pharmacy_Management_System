<?php

namespace App\Http\Controllers\backend;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CustomerController extends Controller
{
    public function Customer_form(){
        return view('backend.pages.customer.create');
    }

    public function Customer_form_submit(Request $request){
       //dd($request->all());

       Customer::create([
        'Customer_Name' => $request-> Customer_Name,
        'Customer_Address' => $request-> Customer_Address,
        'Customer_Number' => $request-> Customer_Number,

       ]);
       return redirect(url('customer_Create'));
        
    }
     
    public function View_form(){
        $Customers = Customer::all();
        return view('backend.pages.customer.edit',compact('Customers'));
    }

    public function form_delete($id){
        Customer::find($id)->delete();
      
        return back();
    
    }

public function update($id){
    $CustomerEdit = Customer::find($id);
    return view('backend.pages.customer.update', compact('CustomerEdit'));
}

public function update_submit(Request $request, $id){
    $CustomerUpdate = Customer::find($id);
    $CustomerUpdate->update([

        'Customer_Name' => $request-> Customer_Name,
        'Customer_Address' => $request-> Customer_Address,
        'Customer_Number' => $request->Customer_Number
        
    ]);
    return redirect()->route('viewform');
}
}
