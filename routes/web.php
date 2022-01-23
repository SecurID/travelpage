<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\TypeaheadController;
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

Route::get('/', [IndexController::class, 'index']);

Route::get('/location/{id}', [LocationController::class, 'show']);

Route::get('/autocomplete-search', [TypeaheadController::class, 'autocompleteSearch']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
