<?php

namespace Database\Factories;

use App\Models\Model;
use App\Models\Module;
use App\Models\Permission;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class RulesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'model_id' => Model::all()->random()->id,
            'module_id' => Module::all()->random()->id,
            'user_id' => User::all()->random()->id,
            'permission_id' => Permission::all()->random()->id
        ];
    }
}
