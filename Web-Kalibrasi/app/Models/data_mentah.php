<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data_mentah extends Model
{
    use HasFactory;
    protected $table = 'data_mentahs';
    protected $fillable = [
        'set_poin',
        'baca1',
        'baca2',
        'baca3',
        'bacauut1',
        'bacauut2',
        'bacauut3',
        'koreksistd',
        'koreksiuut'
    ];
}
