<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
public function Login(){
    return view('auth.login');
}   
public function Login_submit(Request $request){

$credentials=$request->except('_token');
$authentication=auth()->attempt($credentials);
if ($authentication){
    return to_route('Admin');
    
}
else{
    return to_route('login');
}
}



public function logout(){

auth()->logout();
return to_route('login');

}

public function registration_form(){
    return view('auth.register');
}

public function registration_form_submit(Request $request){
    User::create([
        'name' => $request->name,
        'username' => $request->username,
        'email' => $request->email,
        'password'  => $request->password
    ]);
    return back();

}




}
