<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class SuratCabang extends ModelAuthenticate
{
    use HasFactory;

    protected $table = 'surat__cabang';
    protected $primaryKey = 'id';

    public function getHijriahAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])->toHijri()->locale('id')->isoFormat('LL');
    }

    public function getMasehiAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])->translatedFormat('d F Y'); // Gunakan 'F' untuk nama bulan lengkap
    }

    protected $fillable = [
        'lampiran',
        'perihal',
        'no_surat',
        'tujuan',
        'isi_surat'
    ];

    function handleUploadTTDKiri()
    {
        $this->handleDeleteTTDKiri();
        if (request()->hasFile('ttd_kiri')) {
            $ttd_kiri = request()->file('ttd_kiri');
            $destination = "SIHMI/ttd";
            $randomStr = Str::random(5);
            $filename = $this->id . "-" . time() . "-" . $randomStr . "." . $ttd_kiri->extension();
            $url = $ttd_kiri->storeAs($destination, $filename);
            $this->ttd_kiri = "app/" . $url;
            $this->save();
        }
    }

    function handleDeleteTTDKiri()
    {
        $ttd_kiri = $this->ttd_kiri;
        if ($ttd_kiri) {
            $path = public_path($ttd_kiri);
            if (file_exists($path)) {
                unlink($path);
            }
            return true;
        }
    }

    function handleUploadTTDKanan()
    {
        $this->handleDeleteTTDKanan();
        if (request()->hasFile('ttd_kanan')) {
            $ttd_kanan = request()->file('ttd_kanan');
            $destination = "SIHMI/ttd";
            $randomStr = Str::random(5);
            $filename = $this->id . "-" . time() . "-" . $randomStr . "." . $ttd_kanan->extension();
            $url = $ttd_kanan->storeAs($destination, $filename);
            $this->ttd_kanan = "app/" . $url;
            $this->save();
        }
    }

    function handleDeleteTTDKanan()
    {
        $ttd_kanan = $this->ttd_kanan;
        if ($ttd_kanan) {
            $path = public_path($ttd_kanan);
            if (file_exists($path)) {
                unlink($path);
            }
            return true;
        }
    }
}
