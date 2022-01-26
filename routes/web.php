<?php

use App\Http\Controllers\CountryController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LocationActivityPriceController;
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

Route::resource('locations', LocationController::class);

Route::get('/autocomplete-search', [TypeaheadController::class, 'autocompleteSearch']);
Route::get('/autocomplete-search-country', [TypeaheadController::class, 'autocompleteSearchCountry']);

Route::get('/location/activity/price', [LocationActivityPriceController::class, 'create']);

Route::post('/location/activity/price', [LocationActivityPriceController::class, 'store']);

Route::get('/country/{id}/locations', [CountryController::class, 'locations']);
Route::get('/location/{id}/activities', [LocationController::class, 'activities']);

require __DIR__.'/auth.php';
