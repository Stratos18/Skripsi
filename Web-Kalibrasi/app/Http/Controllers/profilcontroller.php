<?php

namespace App\Http\Controllers;

use App\Models\data_mentah;
use App\Models\info_uut;
use App\Models\ketidakpastian;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class profilcontroller extends Controller
{
    public function profil(Request $no_order){
        $user = DB::table('users')->get();
        $data = DB::table('info_uuts')->get();
        return view('page.user',compact('user','data'));
    }
    public function detail($no_order)
    {
        
        $data = info_uut::find($no_order);
        $baca = DB::table('data_mentahs')->where('data_mentahs.no_order',$no_order)->get();
        $uc = DB::table('tabel_hitungs')->where('tabel_hitungs.no_order', $no_order)->get();
        
        return view('kalibrasi.detail',compact('data', 'uc','baca'));
       
     
    }

   
   public function update(Request $request, $id)
   {
    if ($request->Method('post')) {
        $data = $request->all();
        User::where(['id'=>$id])
        ->update(['name'=>$data['name'],
                'nip'=>$data['nip']
            ]);
        return redirect()->back();
    }
    }
    

}