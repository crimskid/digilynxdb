<?php

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
    return view('welcome');
});

Route::get('/indexdigimon', function () {
    return view('digimon');
})->name('digimon.index');
Route::get('/indextribe', function () {
    return view('tribe');
})->name('tribe.index');

Route::get('/listdigimon', function () {
    return view('listdigimon');
});
