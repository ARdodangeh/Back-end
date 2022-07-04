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
    return view('welcome');
});

Route::middleware('auth')->controller(InformationController::class)->name('informations.')->group(function () {
    Route::get('informations', 'index')->name('index');
    Route::get('informations/create', 'create')->name('create');
    Route::post('informations', 'store')->name('store');
    Route::get('informations/male', 'male')->name('male');
    Route::get('informations/female', 'female')->name('female');
    Route::get('informations/bachelor', 'bachelor')->name('bachelor');
    Route::get('informations/master', 'master')->name('master');
    Route::get('informations/tehran', 'tehran')->name('tehran');
    Route::get('informations/mashhad', 'mashhad')->name('mashhad');
    Route::get('informations/esfahan', 'esfahan')->name('esfahan');
    Route::get('informations/sort', 'sort')->name('sort');
});