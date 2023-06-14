<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class profilcontroller extends Controller
{
    public function profil(){
        return view('page.user');
    }
   public function edit(){
        return view('profil.edit');
   }
   public function update(Request $request){
    
   }
}
