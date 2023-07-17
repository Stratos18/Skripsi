<?php

namespace App\Http\Controllers;

use App\Models\alat_standar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class alatstandarcontroller extends Controller
{
    public function alatstandar(){
        $liststd = DB::table('alat_standars')->simplePaginate(15);
        return view('page.alatstd',['liststd'=>$liststd]);
    }
    public function create(){
        return view('alat_standar.formalatstnd');
    }
    public function edit($id){
        $data = alat_standar::findorfail($id);
        return view('alat_standar.editalatstnd',compact('data'));
    }
    public function update(Request $request, $id){
        $data = alat_standar::findorfail($id);
        $data->update($request->all());
        return redirect()->route('alatstd');
    }
    public function store(Request $request){
        $request->validate([
        'nama_alatstd'=>'required',
        'merek_std'=>'required',
        'tipe_std'=>'required',
        'no_seristd'=>'required',
        'no_sertifstd'=>'required',
        'sertifstd'=>'required|mimes:jpeg,jpg,png,pdf',
        'daerah_ukurstd'=>'required',
        'resolusi_std'=>'required',
        'uc_std'=>'required',
        'media'=>'required',
        'metoda'=>'required',
        'udriff'=>'required'
        ]);

        $sertifstd = $request->file('sertifstd');
        $filename = time().'_'. $sertifstd->getClientOriginalName();
        $sertifstd->move(public_path('sertifstd'), $filename);

        
        alat_standar::create([
        'nama_alatstd'=>$request->nama_alatstd,
        'merek_std'=>$request->merek_std,
        'tipe_std'=>$request->tipe_std,
        'no_seristd'=>$request->no_seristd,
        'no_sertifstd'=>$request->no_sertifstd,
        'sertifstd'=>$filename,
        'daerah_ukurstd'=>$request->daerah_ukurstd,
        'resolusi_std'=>$request->resolusi_std,
        'uc_std'=>$request->uc_std,
        'media'=>$request->media,
        'metoda'=>$request->metoda,
        
        ]);
      
        return redirect('alatstd')->with('success', 'data berhasil diunggah!');
    }
    public function hapus($id)
    {
        $data = alat_standar::find($id);
        if (!$data) {
            return redirect()->route('alatstd');}
        $data->delete();
        return redirect()->route('alatstd');
    }
}
