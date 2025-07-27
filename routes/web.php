<?php

use App\Http\Controllers\PessoasController;
use App\Models\Pessoa;
use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\PessoaController;
Route::get('/', function () {
    return view('inicial.inicio');
});
Route::get('/pessoas', [PessoasController::class, 'index'])->name('pessoas.index');
Route::resource('pessoas', PessoasController::class);





