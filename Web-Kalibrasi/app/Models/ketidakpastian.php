<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ketidakpastian extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'tabel_hitungs';
    protected $primaryKey = 'id';
    protected $fillable = [
        'no_order',
        'set_poin',
        'meanstd',
        'meanuut',
        'ui',
        'u2',
        'u3',
        'u4',
        'u5',
        'u6',
        'u7',
        'ugab',
        'veff',
        'u95'
    ];

}
