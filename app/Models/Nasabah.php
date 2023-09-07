<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Nasabah extends Model
{
    protected $table = "nasabah";
    protected $primaryKey = "id";
    protected $fillable = [
        'nama', 'alamat', 'telephone', 'email', 'noreg',];

    public static function generateNextNoreg()
    {
        $lastNoreg = static::orderBy('id', 'desc')->pluck('noreg')->first();

        if ($lastNoreg) {
            $lastNumber = intval(substr($lastNoreg, 3)); // Mengambil angka dari nomor terakhir
            $nextNumber = $lastNumber + 1;
        } else {
            $nextNumber = 1;
        }

        $formattedNumber = str_pad($nextNumber, 4, '0', STR_PAD_LEFT); // Format nomor dengan 4 digit
        $nextNoreg = 'md-' . $formattedNumber;

        return $nextNoreg;
    }
            public function peminjaman()
        {
            return $this->hasMany(Peminjaman::class, 'idpeminjam');
        }

    
}
