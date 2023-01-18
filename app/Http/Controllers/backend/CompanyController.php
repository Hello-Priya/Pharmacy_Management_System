<?php

namespace App\Http\Controllers\backend;
use App\Models\Company;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class CompanyController extends Controller
{
    public function Company(){
        return view('backend.pages.Company.create');
    }

    public function form_submit(Request $request){
       // dd($request->all());
    

    Company::create([

        'Company_Name' => $request-> Company_Name,
        'Details' => $request-> Details
        
    
    ]);

return redirect(url('company_medicine_form'));
}

public function create_form(){
    $Companies = Company::all();
    return view('backend.pages.company.view_form',compact('Companies'));

}
public function delete_form_submit($id){
    Company::find($id)->delete();
  
    return back();

}
public function update_form($id){
    $CompanyEdit = Company::find($id);
    return view('backend.pages.company.updateForm', compact('CompanyEdit'));
}

public function update_form_submit(Request $request, $id){
    $CompanyUpdate = Company::find($id);
    $CompanyUpdate->update([

        'Company_Name' => $request-> Company_Name,
        'Details' => $request-> Details

    ]);
    return redirect()->route('Create-form');
}

}
