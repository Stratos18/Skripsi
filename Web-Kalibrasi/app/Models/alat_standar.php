<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alat_standar extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'alat_standars';
    protected $primaryKey = 'id';
    protected $fillable = [
        'no_sertifstd',
        'nama_alatstd',
        'merek_std',
        'tipe_std',
        'no_seristd',
        'no_sertifstd',
        'sertifstd',
        'daerah_ukurstd',
        'resolusi_std',
        'uc_std',
        'media',
        'metoda',
        'udriff'
    ];
}
