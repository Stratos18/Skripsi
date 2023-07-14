<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data_mentah extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $table = 'data_mentahs';
    protected $fillable = [
        'no_order',
        'set_poin',
        'inhomo',
        'baca1',
        'baca2',
        'baca3',
        'bacauut1',
        'bacauut2',
        'bacauut3',
        'koreksistd',
        'koreksiuut1',
        'koreksiuut2',
        'koreksiuut3',
        'koreksi',
        'min_std',
        'min_uut',
        'max_std',
        'max_uut',
        'meanstd',
        'meanuut',
        'sd'
    ];

}
