<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibrosController;

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
Route::get('/', [LibrosController::class, 'index']);

Route::resource('libros', LibrosController::class);

/*
Route::get('/libros', [LibrosController::class, 'index'])->name('libros.index');

Route::get('/libros/crear', [LibrosController::class, 'create'])->name('libros.create');

Route::get('/libros/{libro}', [LibrosController::class, 'show'])->name('libros.show');

Route::post('/libros', [LibrosController::class, 'store'])->name('libros.store');

Route::get('/libros/{libro}/edit', [LibrosController::class, 'edit'])->name('libros.edit');

Route::put('/libros/{libro}', [LibrosController::class, 'update'])->name('libros.update');

Route::delete('/libros/{libro}', [LibrosController::class, 'destroy'])->name('libros.destroy');

*/
