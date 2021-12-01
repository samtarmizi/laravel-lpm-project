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


Route::get('lembaga-route', function () {
    return 'this is lembaga route';
})->middleware(['auth','lp']);


Route::get('/get-spm-result', function (Request $request) {

    // get token
    $response = Http::withOptions(['verify' => false])->post('http://svktot.moe.gov.my/api/auth/login', [
        'email' => 'amirulhafiz@moe.gov.my',
        'password' => 'qazwsx123'
    ]);

    dd($response->body());

    $token = '19|hQ7tZinUuQoxv8ULGvP5iVBXEKuvnWy94Xfebz0X';


    //get result
    $response = Http::withOptions(['verify' => false])->withHeaders([
        'Authorization' => 'Bearer '.$token,
        'Accept' => 'application/json'
    ])->post('https://svktot.moe.gov.my/api/verification/spm', [
        'tahun' => '2004',
        'nic' => '871207035096',
        'akg' => 'JB061A023'
    ]);
});


Route::get('contoh-api/todos', function () {

    $url = 'https://jsonplaceholder.typicode.com/todos';

    $response = Http::get($url);

    $todos = $response->object();

    return view('api-todos', compact('todos'));

});

Route::get('contoh-api/create-coordinate', function () {

    $url = 'https://api.staging.tarsoft.co/api/coordinates/create';

    $body = [
        'name' => 'Lembaga 2',
        'latitude' => 1111,
        'longitude' => 333
    ];

    $response = Http::post($url, $body);

    dd($response->object());

});
