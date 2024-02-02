<?php

namespace App\Http\Controllers;

use App\Models\Vacancy as ModelsVacancy;
use Illuminate\Http\Request;

class vacancy extends Controller
{
    public function index(Request $request)
    {
        $this->authorize('view',ModelsVacancy::class);
        return response()->json(['message' => 'Hola desde vacancy']);
    }
}
