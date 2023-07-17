<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sertifikat extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'sertifikats';
    protected $primaryKey = 'id';
    protected $fillable = [
        'no_order',
        'no_sertifikat'
    ];
}

