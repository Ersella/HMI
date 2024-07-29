<?php

namespace App\Models\Cabang;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Models\ModelAuthenticate;

class Alumni extends ModelAuthenticate
{
    use HasFactory;

    protected $table = 'cabang__alumni';
    protected $primaryKey = 'id';

    protected $fillable = [
        'nama',
        'alamat',
        'foto',
        'no_wa',
        'asal_cabang',
    ];

    function handleUploadFile()
    {
        $this->handleDeleteFile();
        if (request()->hasFile('foto')) {
            $foto = request()->file('foto');
            $destination = "SIHMI/alumni";
            $randomStr = Str::random(5);
            $filename = $this->id . "-" . time() . "-" . $randomStr . "." . $foto->extension();
            $url = $foto->storeAs($destination, $filename);
            $this->foto = "app/" . $url;
            $this->save();
        }
    }

    function handleDeleteFile()
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
