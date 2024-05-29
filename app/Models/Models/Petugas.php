<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    public $timestamps = false; 
    use HasFactory;
    protected $table = 'petugas'; // Ubah sesuai dengan nama tabel yang sesuai
    protected $primaryKey = 'id_petugas'; // Jika nama kolom kunci utama bukan 'id', ubah sesuai kebutuhan
    protected $fillable = [
        'nama_petugas',
        'username',
        'password',
        'telp',
        'level',
    ];
}
