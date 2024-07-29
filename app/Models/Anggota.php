<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Anggota extends ModelAuthenticate
{
    use HasFactory;

    protected $table = 'anggota';
    protected $primaryKey = 'id';

    protected $fillable = [
        'nama',
        'foto',
        'tempat_lahir',
        'tanggal_lahir',
        'status_anggota',
        'no_wa',
        'umur',
        'alamat',
    ];

    function handleUploadFoto()
    {
        $this->handleDeleteFoto();
        if (request()->hasFile('foto')) {
            $foto = request()->file('foto');
            $destination = "images/foto";
            $randomStr = Str::random(5);
            $filename = $this->id . "-" . time() . "-" . $randomStr . "." . $foto->extension();
            $url = $foto->storeAs($destination, $filename);
            $this->foto = "app/" . $url;
            $this->save();
        }
    }

    function handleDeleteFoto()
    {
        $foto = $this->foto;
        if ($foto) {
            $path = public_path($foto);
            if (file_exists($path)) {
                unlink($path);
            }
            return true;
        }
    }
}
