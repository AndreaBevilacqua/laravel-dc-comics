<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicController;

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
    return view('home');
})->name('home');

Route::get('/comics', [ComicController::class, 'index'])->name('comics.index');// Rotta Lista 
Route::get('/comics/create', [ComicController::class, 'create'])->name('comics.create');// Rotta per creazione
Route::get('/comics/{comic}', [ComicController::class, 'show'])->name('comics.show');// Rotta dettaglio 
Route::get('/comics/{comic}/edit', [ComicController::class, 'edit'])->name('comics.edit');// Rotta per modificare un comic
Route::post('/comics', [ComicController::class, 'store'])->name('comics.store');// Rotta per il salvataggio
Route::put('/comics/{comic}', [ComicController::class, 'update'])->name('comics.update'); // Rotta per salvare le modifiche
Route::delete('/comics/{comic}', [ComicController::class, 'destroy'])->name('comics.destroy'); // Rotta per eliminare
