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
    return view('order.index');
});

// begin::service-laundry
Route::get('/laundry', function() {
    return view('services.laundry.index');
})->name('laundry.index');
Route::get('/laundry/create', function() {
    return view('services.laundry.create');
})->name('laundry.create');
// end::service-laundry
