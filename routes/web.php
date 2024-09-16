<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScreenController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [ScreenController::class, 'index']);
Route::get('/screen/create', [ScreenController::class, 'create']);
Route::post('/screen/store', [ScreenController::class, 'store']);
// Route::get('/screen/update', [ScreenController::class, 'update']);
Route::get('screen/{id}/edit', [ScreenController::class, 'edit']);
Route::put('screen/{id}/update', [ScreenController::class, 'update']);
Route::delete('screen/{id}/delete', [ScreenController::class, 'delete']);
