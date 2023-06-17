<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class profilcontroller extends Controller
{
    public function profil(){
        $user = User::findOrFail(1);
        return view('page.user',compact('user'));
    }
    
   public function edit(){
        return view('profil.edit');
   }
   public function update(Request $request)
   {
    $request->validate([
    'name'=> ['string', 'min:3', 'required'],
    'nip'=> ['int', 'min:18', 'required', 'unique:users,nip'],
    ]);
       }
}
