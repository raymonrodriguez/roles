<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;

    const Reclutamiento = 1;

    const Crm = 2;

    const Ventas = 3;

    const Contabilidad = 4;
}
