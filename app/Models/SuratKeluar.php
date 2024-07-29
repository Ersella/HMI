<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class SuratKeluar extends ModelAuthenticate
{
    use HasFactory;

    protected $table = 'surat__keluar';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id_pengguna',
        'nama',
        'nomor',
        'perihal',
        'tujuan',
        'tanggal',
        'url_surat',
    ];

    function handleUploadFile()
    {
        $this->handleDeleteFile();
        if (request()->hasFile('url_surat')) {
            $url_surat = request()->file('url_surat');
            $destination = "SIHMI/surat-keluar";
            $randomStr = Str::random(5);
            $filename = $this->id . "-" . time() . "-" . $randomStr . "." . $url_surat->extension();
            $url = $url_surat->storeAs($destination, $filename);
            $this->url_surat = "app/" . $url;
            $this->save();
        }
    }

    function handleDeleteFile()
    {
        $url_surat = $this->url_surat;
        if ($url_surat) {
            $path = public_path($url_surat);
            if (file_exists($path)) {
                unlink($path);
            }
            return true;
        }
    }
}
