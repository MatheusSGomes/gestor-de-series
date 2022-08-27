<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    SeriesController,
    SeasonsController
};


Route::get('/', function () {
    return redirect('/series');
});

Route::resource('/series', SeriesController::class)
    ->except(['show']);

Route::get('/series/{serie}/seasons', [SeasonsController::class, 'index'])->name('seasons.index');

// Route::delete('/series/destroy/{id}', [SeriesController::class, 'destroy'])->name('series.destroy');

// Route::controller(SeriesController::class)->group(function () {
//     Route::get('/series', 'index')->name('series.index');
//     Route::get('/series/criar', 'create')->name('series.create');
//     Route::post('/series/salvar', 'store')->name('series.store');
// });
