<?php

namespace App\Http\Controllers;

use App\Models\data_mentah;
use App\Models\info_uut;
use App\Models\ketidakpastian;
use App\Models\sertifikat;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class profilcontroller extends Controller
{
    public function profil(Request $no_order){

        $user = DB::table('users')->get();
        $data = DB::table('info_uuts')->simplePaginate(15);
        return view('page.user',compact('user','data'));
    }
    public function detail($no_order)
    {
        
        $data = info_uut::find($no_order);
        $sertif = DB::table('sertifikats')->where('sertifikats.no_order', $no_order)->get();
        $baca = DB::table('data_mentahs')->where('data_mentahs.no_order',$no_order)->get();
        $uc = DB::table('tabel_hitungs')->where('tabel_hitungs.no_order', $no_order)->get();
        
        return view('kalibrasi.detail',compact('data', 'uc','baca','sertif'));
       
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
    public function saveSertif(Request $request)
    {
        // Validasi data input dari form jika diperlukan
        $validatedData = $request->validate([
            'no_order' => ['required',Rule::unique('sertifikat', 'no_order')->ignore($request->id)],
            'no_sertifikat' => ['required',Rule::unique('sertifikat', 'no_sertifikat')->ignore($request->id)],
            // Tambahkan aturan validasi lainnya jika ada
        ]);

        // Simpan data ke database
        sertifikat::create($validatedData);

        return redirect()->back()->with('success', 'Data berhasil disimpan.');
    }

}