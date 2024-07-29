<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keuangan extends ModelAuthenticate
{
    use HasFactory;

    // Nama tabel di database
    protected $table = 'keuangan';

    // Kolom-kolom yang bisa diisi secara massal
    protected $fillable = [
        'tanggal',
        'deskripsi',
        'pemasukan',
        'pengeluaran'
    ];

    // Jika menggunakan timestamps
    public $timestamps = true;

    // Jika nama kolom created_at dan updated_at berbeda
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
}
