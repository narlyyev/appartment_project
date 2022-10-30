<?php

use App\Http\Controllers\PropertyController;
use App\Models\Customer;
use App\Models\Location;
use App\Models\OwnerType;
use App\Models\PropertyType;
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

Route::controller(PropertyController::class)->group(function () {
    Route::get('', 'index')->name('home');
    Route::get('/properties/{id}', 'show')->name('cars.show')->where('id', '[0-9]+');
});

Route::get('/property_type/{slug}/property', [\App\Http\Controllers\PropertyTypeController::class, 'show'])
    ->name('property_type.show')->where('slug', '[A-Za-z0-9-]+');
Route::get('/owner_type/{slug}/property', [\App\Http\Controllers\OwnerTypeController::class, 'show'])
    ->name('owner_type.show')->where('slug', '[A-Za-z0-9-]+');
Route::get('/customer/{slug}/property', [\App\Http\Controllers\CustomerController::class, 'show'])
    ->name('customer.show')->where('slug', '[A-Za-z0-9-]+');
Route::get('/location/{slug}/property', [\App\Http\Controllers\LocationController::class, 'show'])
    ->name('location.show')->where('slug', '[A-Za-z0-9-]+');