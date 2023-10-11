<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $table = 'transactions'; // Sesuaikan dengan nama tabel Anda
    protected $fillable = [
        'jenis_sampah_id', // Contoh kolom yang terkait dengan jenis sampah
        'jumlah_sampah',
        'status',
        'harga',
        'lama_penyimpanan',
    ];
    public function jenisSampah()
    {
        return $this->belongsTo(JenisSampah::class, 'jenis_sampah_id');
    }
}
