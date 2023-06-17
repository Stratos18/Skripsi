<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class infouut extends Model
{
    use HasFactory;
    protected $table = 'info-uut';
    protected $primaryKey = 'no_order';
    protected $fillable = [
        'no_order',
        'pemilik',
        'alamat',
        'nama_uut',
        'merek',
        'tipe',
        'no_seri',
        'resolusi_uut',
        'tgl_test',
        'tempat_test',
        'suhu_ruang',
        'kelembaban',
        'tekanan'
    ];

}
