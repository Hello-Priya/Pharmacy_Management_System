<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Report;

class ReportController extends Controller
{
 public function Report_form(){
    return view('backend.pages.Report.create');
 }

 public function database_Report_form(Request $request){
    Report::create([

        'In_Stoke' => $request-> In_Stoke,
        'Stoke_Out' => $request-> Stoke_Out ,
        'Expired' =>$request-> Expired
    ]);
    return redirect(url('Report_create'));
 }
public function Report_Create(){
        $Reports = Report::all();
    return view('backend.pages.Report.view',compact('Reports'));
}

public function Report_Delete($id){
    Report::find($id)->delete();

    return back();
}

public function Report_Edit($id){
    $ReportEdit = Report::find($id);
    return view('backend.pages.Report.update',compact('ReportEdit'));
}


public function Report_Update(Request $request, $id){
   $ReportUpdate = Report::find($id);
   $ReportUpdate->update([

    'In_Stoke' => $request-> In_Stoke,
    'Stoke_Out' => $request-> Stoke_Out ,
    'Expired' =>$request-> Expired
   ]);
   return back();
}
}
