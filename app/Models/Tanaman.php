<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Tanaman extends Model
{
    use HasFactory;
    protected $table = 'tanaman'; // Ubah sesuai dengan nama tabel yang sesuai
    protected $primaryKey = 'id'; // Jika nama kolom kunci utama bukan 'id', ubah sesuai kebutuhan
    protected $fillable = [
        'tanaman',
        'alamat',
        'tglTanam',
        'tglPanen'
    ];
}
