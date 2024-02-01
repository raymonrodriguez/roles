<?php

namespace Database\Seeders;

use App\Models\Module;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $modules = ['Reclutamiento', 'Ventas', 'Mantenimiento', 'crm'];
        foreach ($modules as $module) {
            Module::updateOrCreate(
                ['name' => $module],

            );
        }
    }
}
