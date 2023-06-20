<?php

namespace App\Http\Controllers;

use App\Models\info_uut;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;


class kalibrasicontroller extends Controller
{

    public function index(){
        $listuut = DB::table('info_uuts')->get();
        return view('page.kalibrasi',['listuut'=>$listuut]);
    }
    public function create(){
        return view('kalibrasi.infouut');
    }
    public function store(Request $request)
    {/* dd($request->all());*/
    $validatorData = $request->validate([
        'no_order'=>['integer','required'],
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
        'tekanan'=>['decimal:2','required']]);
    
    info_uut::create($validatorData);
    
    return redirect('/pkalibrasi')->with('sucess','data telah disimpan');
    }
       
}
