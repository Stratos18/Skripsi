<?php

namespace App\Http\Controllers;

use App\Models\infouut;
use Illuminate\Http\Request;

class kalibrasicontroller extends Controller
{
    public function kalibrasi(){
        return view('page.infouut');
    }
    public function infouut(Request $request)
    {
        $validasiinfouut=$request->validate([
        'no_order'=>['integer','required',],
        'pemilik'=>['string','required'],
        'alamat'=>['string','required'],
        'nama_uut'=>['string','required'],
        'merek'=>['string','required'],
        'tipe'=>['string','required'],
        'no_seri'=>['string','required'],
        'resolusi_uut'=>['decimal:2','required'],
        'tgl_test'=>['date','required'],
        'tempat_test'=>['string','required'],
        'suhu_ruang'=>['decimal:2','required'],
        'kelembaban'=>['decimal:2','required'],
        'tekanan'=>['decimal:','required'],
        ]);

        infouut::create($validasiinfouut);
        return redirect()->route('infouut')->with('success', 'Formulir berhasil disimpan!');

    }
}
