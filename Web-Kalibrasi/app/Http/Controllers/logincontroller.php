<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class logincontroller extends Controller
{
    public function login(){
        return view('page.login');
    }
    public function submitlogin(request $request){
        if(Auth::attempt($request->only('name','password'))){
            return redirect('home');}
        return redirect('/');
    }
}
