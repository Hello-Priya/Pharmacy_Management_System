<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function Dashboard(){
        return view('backend.master');

    }
    public function Content(){
        return view('backend.partial.content');
    }

    
}
