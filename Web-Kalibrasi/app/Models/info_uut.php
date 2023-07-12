<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ketidakpastian;
class info_uut extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'info_uuts';
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
    public function ketidakpastian()
    {
      // return $this->hasMany(ketidakpastian::class);
        
    }
    
    
    
    
}
