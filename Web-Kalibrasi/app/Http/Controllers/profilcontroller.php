<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class profilcontroller extends Controller
{
    public function profil(){
        $user = DB::table('users')->get();
        return view('page.user',['user'=>$user]);
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
