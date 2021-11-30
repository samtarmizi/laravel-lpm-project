<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/todos', [App\Http\Controllers\TodoController::class, 'index']);
Route::get('/todos/create', [App\Http\Controllers\TodoController::class, 'create'])->middleware('auth');
Route::post('/todos/create', [App\Http\Controllers\TodoController::class, 'store']);
Route::get('/todos/{todo}', [App\Http\Controllers\TodoController::class, 'show']);
Route::get('/todos/{todo}/edit', [App\Http\Controllers\TodoController::class, 'edit']);
Route::post('/todos/{todo}/edit', [App\Http\Controllers\TodoController::class, 'update']);
Route::get('/todos/{todo}/delete', [App\Http\Controllers\TodoController::class, 'delete']);
Route::get('/todos/{todo}/force-delete', [App\Http\Controllers\TodoController::class, 'forceDelete']);

Route::get('/ejen/senarai-permohonan', [App\Http\Controllers\Ejen\PermohonanController::class,'index']);
Route::get('/ejen/cipta-permohonan', [App\Http\Controllers\Ejen\PermohonanController::class,'create']);
Route::post('/ejen/cipta-permohonan', [App\Http\Controllers\Ejen\PermohonanController::class,'store']);
