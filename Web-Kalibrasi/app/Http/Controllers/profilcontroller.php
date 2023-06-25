<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class profilcontroller extends Controller
{
    public function profil(){
        $listuut = DB::table('info_uuts')->get();
        $user = DB::table('users')->get();
        return view('page.user',['user'=>$user],['listuut'=>$listuut]);
    }
    
   public function edit(){
        return view('profil.edit');
   }
   public function update(Request $request, $id)
   {
    $user = User::findorFail($id);
    $user->update($request->all());
    return redirect('/profil')->with('success', 'berhasil diperbarui.');
    }

}
