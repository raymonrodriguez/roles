<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = ['Crear ', 'Leer ', 'Actualizar ', 'Eliminar'];
        foreach ($roles as $role) {
            Permission::updateOrCreate(['name' => $role],['name' => $role]);
        }
    }
}
