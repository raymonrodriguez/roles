<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\vacancy as VacancyController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('vacancy', [VacancyController::class, 'index'])->middleware('auth:sanctum');




Route::get('roles', function (User $user) {
    return auth()->user()->roles;
})->middleware('auth:sanctum');



Route::get('roles', function (User $user) {
    return auth()->user()->roles;
})->middleware('auth:sanctum');


Route::get('roles', function (User $user) {
    return auth()->user()->roles;
})->middleware('auth:sanctum');
