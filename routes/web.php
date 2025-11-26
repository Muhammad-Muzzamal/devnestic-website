<?php

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

Route::get('/', function () {
    return view('pages/landing-page');
});
Route::get('/services-detail', function () {
    return view('pages/services-detail');
})->name('services-detail');
Route::get("/term-and-conditions", function () {
    return view('pages.term_condition');
});
