<?php

namespace App\Models\Admin;

use App\Models\Admin\Role;

use App\Models\Model;

class Module extends Model
{
    protected $table = 'admin__module';

    public function role()
    {
        return $this->hasMany(Role::class, 'id_module');
    }
}
