<?php

namespace App\Http\Controllers;

use App\Models\alat_standar;
use App\Models\data_mentah;
use App\Models\info_uut;
use App\Models\ketidakpastian;
use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class kalibrasicontroller extends Controller
{

    public function index(){
        $listuut = DB::table('info_uuts')->get();
        return view('page.kalibrasi',['listuut'=>$listuut]);
    }
    public function create(){
        return view('kalibrasi.infouut');
    }
    public function store(Request $request){
        $validatorData = $request->validate([
        'no_order'=>['integer','required',Rule::unique('info_uuts', 'no_order')->ignore($request->id)],
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
        'tekanan'=>['decimal:2','required']
        ]);
    
        info_uut::create($validatorData);
    
        return redirect('/pkalibrasi/inputbaca')->with('sucess','data telah disimpan');
    }
    public function inputbaca(){
        $alatstd = alat_standar::all();
        $options = info_uut::all();
        return view('kalibrasi.inputbacaan',compact('options', 'alatstd' ));
    }
    public function getUc($option)  {
    $data = ketidakpastian::where('no_order', $option)->get();
    return view(route('input.baca'))->with('data', $data); // Ganti dengan nama view yang sesuai
  }
    public function savebacaan( Request $request){
   $datamentah= $request ->validate([
        'no_order'=>['required'],
        'set_poin'=>['required'],
        'inhomo'=>['required'],
        'baca1'=>['required'],
        'baca2'=>['required'],
        'baca3'=>['required'],
        'bacauut1'=>['required'],
        'bacauut2'=>['required'],
        'bacauut3'=>['required'],
        'koreksistd'=>['required'],
        'koreksiuut1'=>['required'],
        'koreksiuut2'=>['required'],
        'koreksiuut3'=>['required'],
        'min_std'=>['required'],
        'min_uut'=>['required'],
        'max_std'=>['required'],
        'max_uut'=>['required'],
        'meanstd'=>['required'],
        'meanuut'=>['required'],
        'sd'=>['required']
        ]);
      $dataketidakpastian = $request -> validate([
            'no_order'=>['required'],
            'set_poin'=>['required'],
            'ui'=>['required'],
            'u2'=>['required'],
            'u3'=>['required'],
            'u4'=>['required'],
            'u5'=>['required'],
            'u6'=>['required'],
            'u7'=>['required'],
            'ugab'=>['required'],
            'veff'=>['required'],
            'meanstd'=>['required'],
            'meanuut'=>['required'],
            'u95'=>['required']
        ]);
        ketidakpastian::create($dataketidakpastian);
      data_mentah::create($datamentah);
    return redirect('/pkalibrasi/inputbaca')->with('sucess','data telah disimpan');
       // return $request;
    }






       
}
