<?php

namespace App\Http\Controllers;

use App\Models\info_uut;
use App\Models\sertifikat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class cetaksertifcontroller extends Controller
{
    public function cetakSertif($no_order){
        $data = info_uut::find($no_order);
        $user = DB::table('users')->get();
        $noorder = DB::table('info_uuts')
        ->join('alat_standars', 'info_uuts.no_sertifstd', '=', 'alat_standars.no_sertifstd')
        ->where('info_uuts.no_order', $no_order)
        ->get();
        $datauc = DB::table('tabel_hitungs')
        ->where('tabel_hitungs.no_order',$no_order)
        ->orderBy('set_poin', 'ASC')
        ->get();
        $sertif = DB::table('sertifikats')->where('sertifikats.no_order', $no_order)->get();
        return view('formsertif.formsertif',compact('data','user','sertif')) ;
}

}
