<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

class History extends ModelAuthenticate
{
    protected $table = 'history';
    protected $primaryKey = 'id';

    protected $fillable = [
        'nama',
        'jabatan',
        'foto',
    ];

    public function getTanggalAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])->translatedFormat('l, d F Y');
    }

    function handleUploadFile()
    {
        $this->handleDeleteFile();
        if (request()->hasFile('foto')) {
            $foto = request()->file('foto');
            $destination = "SIHMI/pengurus";
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
