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
//# aggiunto controller con il comando php artisan make:controller HomeController
//# spostata la logica della rotta nel file controller home controller in app http controllers

Route::get('/', 'HomeController@index')->name('home');

Route::get('/movie', function () {
    $movies = [];
    return view('pages/movies', compact('movies'));
})->name('movies.index');
