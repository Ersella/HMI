<?php

namespace App\Models\Admin;

use App\Models\Admin\Module;
use App\Models\Admin\Pengguna;
use App\Models\Admin\MasterData\Unitkerja;

use App\Models\Model;

class Role extends Model
{
    protected $table = 'admin__role';

    public function pengguna()
    {
        return $this->belongsTo(Pengguna::class, 'id_pengguna');
    }

    public function module()
    {
        return $this->belongsTo(Module::class, 'id_module');
    }
}
