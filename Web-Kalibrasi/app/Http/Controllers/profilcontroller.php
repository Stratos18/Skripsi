<?php

namespace App\Http\Controllers;

use App\Models\info_uut;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class profilcontroller extends Controller
{
    public function profil(){
        $user = DB::table('users')->get();
        $data = info_uut::join('tabel_hitungs', 'info_uuts.no_order', '=', 'tabel_hitungs.no_order')
                ->get();
        return view('page.user',['user'=>$user],['data'=>$data]);
    }
    
  /* public function edit(){
        return view('profil.edit');
   }*/
   public function update(Request $request, $id)
   {
    if ($request->Method('post')) {
        $data = $request->all();
        User::where(['id'=>$id])
        ->update(['name'=>$data['name'],
                'nip'=>$data['nip']
            ]);
        return redirect()->back();
    } /*
    $user = User::findorFail($id);
    $validasi = $request-> validate([
        'name'=>['required'],
        'nip'=>['required']
    ]);
    $user->update($validasi);
    
    //return redirect('/profil');*/
}

}