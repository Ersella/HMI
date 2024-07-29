<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Training extends ModelAuthenticate
{
    use HasFactory;

    protected $table = 'training';
    protected $fillable = [
        'name',
        'berkas_pdf',
        'berkas_word',
    ];

    function handleUploadPdf()
    {
        $this->handleDeletePdf();
        if (request()->hasFile('berkas_pdf')) {
            $berkas_pdf = request()->file('berkas_pdf');
            $destination = "SIHMI/Training";
            $randomStr = Str::random(5);
            $filename = $this->id . "-" . time() . "-" . $randomStr . "." . $berkas_pdf->extension();
            $url = $berkas_pdf->storeAs($destination, $filename);
            $this->berkas_pdf = "app/" . $url;
            $this->save();
        }
    }

    function handleDeletePdf()
    {
        $berkas_pdf = $this->berkas_pdf;
        if ($berkas_pdf) {
            $path = public_path($berkas_pdf);
            if (file_exists($path)) {
                unlink($path);
            }
            return true;
        }
    }

    function handleUploadWord()
    {
        $this->handleDeleteWord();
        if (request()->hasFile('berkas_word')) {
            $berkas_word = request()->file('berkas_word');
            $destination = "SIHMI/Training";
            $randomStr = Str::random(5);
            $filename = $this->id . "-" . time() . "-" . $randomStr . "." . $berkas_word->extension();
            $url = $berkas_word->storeAs($destination, $filename);
            $this->berkas_word = "app/" . $url;
            $this->save();
        }
    }

    function handleDeleteWord()
    {
        $berkas_word = $this->berkas_word;
        if ($berkas_word) {
            $path = public_path($berkas_word);
            if (file_exists($path)) {
                unlink($path);
            }
            return true;
        }
    }
}
