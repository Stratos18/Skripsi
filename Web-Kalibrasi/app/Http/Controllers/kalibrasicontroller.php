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
        $listuut = info_uut::all();
        return view('page.kalibrasi',['listuut'=>$listuut]);
    }
    public function create(){
        $alatstd = alat_standar::all();
        return view('kalibrasi.infouut',compact('alatstd'));
    }
    public function hapus($no_order){
        $data = info_uut::find($no_order);
        if (!$data) {
            return redirect()->route('pkalibrasi');}
        $data->delete();
        return redirect()->route('pkalibrasi');
    }
    public function store(Request $request){
        $no_order = $request->input('no_order');
        $validatorData = $request->validate([
        'no_order'=>['integer','required',Rule::unique('info_uuts', 'no_order')->ignore($request->id)],
        'pemilik'=>['string','required'],
        'alamat'=>['string','required'],
        'nama_uut'=>['string','required'],
        'merek'=>['string','required'],
        'tipe'=>['string','required'],
        'no_seri'=>['string','required'],
        'resolusi_uut'=>['decimal:2','required'],
        'daerah_ukur'=>['required'],
        'no_sertifstd'=>['required'],
        'tgl_test'=>['date','required'],
        'tempat_test'=>['string','required'],
        'suhu_ruang'=>['decimal:2','required'],
        'kelembaban'=>['decimal:2','required'],
        'tekanan'=>['decimal:2','required'],
        'inhomo'=>['required']
        ]);
    
        info_uut::create($validatorData);
        return redirect()->route('input.baca',['no_order' => $no_order])->with('sucess','data telah disimpan');
    }
    public function inputbaca($no_order){
        $noorder = DB::table('info_uuts')
        ->join('alat_standars', 'info_uuts.no_sertifstd', '=', 'alat_standars.no_sertifstd')
        ->where('info_uuts.no_order', $no_order)
        ->get();
        $datauc = DB::table('tabel_hitungs')
        ->where('tabel_hitungs.no_order',$no_order)
        ->orderBy('set_poin', 'ASC')
        ->get();
        return view('kalibrasi.inputbacaan',['noorder'=>$noorder], ['datauc'=>$datauc]);
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
        'koreksi'=>['required'],
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
     return redirect()->back()->with('sucess','data telah disimpan');
       // return $request;
    }






       
}
