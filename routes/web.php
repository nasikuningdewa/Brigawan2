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
    return view('index');
})->name('home');
Route::get('/map', function () {
    return view('map');
})->name('map');
Route::get('/movement', function () {
    return view('movement');
})->name('movement');
Route::get('/collaborator', function () {
    return view('collaborator');
})->name('collaborator');
Route::get('/login', function () {
    return view('login');
})->name('login');