<?php

namespace Database\Seeders;

use App\Models\Model;
use App\Models\Module;
use Illuminate\Database\Seeder;

class ModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $module = Module::all()->random()->id;
        $roles = ['name' => 'Recruiting', 'name' => 'Ventas', 'Mantenimiento', 'CallCenter'];
        foreach ($roles as $role) {
            Model::updateOrCreate(['name' => $role, 'module_id' => $module]);
        }
    }
}
