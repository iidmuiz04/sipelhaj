<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jamaah extends Model
{
    use HasFactory;
    
    protected $table = "jamaahs";
    protected $primaryKey = "id_jamaah";

    protected $fillable = [
        'tgl_daftar',
        'nama_lengkap',
        'tgl_lahir',
        'alamat',
        'no_telp',
        'keterangan'
    ];
}
