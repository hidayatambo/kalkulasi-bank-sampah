<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Transactions;

class JenisSampah extends Model
{
    use HasFactory;
    protected $table = 'jenis_sampah'; // Sesuaikan dengan nama tabel Anda

    protected $fillable = [
        'nama',
        'deskripsi',
        'foto',
        'harga_per_kilogram',
    ];
    public function transactions()
    {
        return $this->hasMany(Transaction::class, 'jenis_sampah_id');
    }
}
