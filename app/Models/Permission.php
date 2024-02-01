<?php

namespace App\Models;

use App\Models\Model as ModelsModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;

    public function models()
    {
        return $this->belongsToMany(ModelsModel::class);
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
}
