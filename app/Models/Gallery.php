<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends ModelAuthenticate
{
    protected $table = 'gallery';
    protected $primaryKey = 'id';

    protected $fillable = [
        'judul',
    ];

    public function detail()
    {
        return $this->hasMany(GalleryDetail::class, 'id_gallery');
    }
}
