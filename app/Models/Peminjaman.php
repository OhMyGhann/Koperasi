<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;

    protected $table = "peminjaman";
    protected $fillable = [
        'idpeminjam', 'nominal', 'keterangan'
    ];

    // Relasi dengan model Nasabah
    public function peminjam()
    {
        return $this->belongsTo(Nasabah::class, 'idpeminjam');
    }
}
