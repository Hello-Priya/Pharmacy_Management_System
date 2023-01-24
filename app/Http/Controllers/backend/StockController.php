<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Stoke;

class StockController extends Controller
{
    public function Stoke(){
        return view('backend.pages.stoke.create');
    }
    public function Database_form(Request $request){

        Stoke::create([
            'SL_id' =>$request ->SL_id,
            'Product_Name' =>$request ->Product_Name,
            'Product_details' =>$request ->Product_details
        ]);
        return redirect(url('stoke_create'));

    }

    public function stoke_create(){
        $Stokes = Stoke::all();
        return view('backend.pages.stoke.list',compact('Stokes'));
    }

    public function stoke_delete($id){
        Stoke::find($id)->delete();
        
        return back();

    }

    public function stokeEdit($id){
        $StokeEdit = Stoke::find($id);
        return view('backend.pages.stoke.update', compact('StokeEdit'));
    }
    

    public function stoke_update(Request $request,$id){
        $Stokeupdate = Stoke::find($id);
        $Stokeupdate->update([

            'SL_id' =>$request ->SL_id,
            'Product_Name' =>$request ->Product_Name,
            'Product_details' =>$request ->Product_details
        ]);

        return redirect(url('stoke_create'));
    }


}
