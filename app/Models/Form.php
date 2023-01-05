<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;
    protected $fillable = [
        'client_name',
        'client_email',
        'no_handphone',
        'alamat',
        'pic',
        'request',
        'mulai',
        'selesai',
        'status',
        'keterangan',
        'jumlah',
    ];
}
