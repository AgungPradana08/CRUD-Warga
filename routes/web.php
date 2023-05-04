<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WargaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return 'Aplikasi Laravel';
});
Route::middleware(['auth'])->group(function(){
    Route::get('/warga', [WargaController::class, 'index']);
    Route::get('/warga/create', [WargaController::class, 'create']);
    Route::post('/warga/store', [WargaController::class, 'store']);
    Route::get('/warga/{id}/edit', [WargaController::class, 'edit']);
    Route::put('/warga/{id}',[WargaController::class, 'update']);
    Route::get('/warga/{id}/detail',[WargaController::class, 'detail']);
    Route::delete('/warga/{id}',[WargaController::class, 'destroy']);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

