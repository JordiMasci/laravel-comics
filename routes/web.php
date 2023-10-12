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
    $titleHead = 'DC comics Laravel';
    $title = 'Lista film Comics';

    return view('layouts.main', compact('titleHead', 'title'));
})->name('homepage');



Route::get('/about', function () {
    $titleHead = 'DC comics Laravel';
    $arrayTipo = [
        'tipo1',
        'tipo2',
        'tipo3',
        'tipo4',
    ];

    return view('layouts.main-about', compact('titleHead', 'arrayTipo'));
})->name('about');



