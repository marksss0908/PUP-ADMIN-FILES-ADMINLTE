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

Route::get('/Fileslist', function () {
    return view('Files.viewFile');
})->name('File.viewFile');


Route::get('/Dashboard', function () {
    return view('Dashboard.Dashboard');
})->name('Dashboard.Dashboard');


Route::get('/Addfile', function () {
    return view('Files.addFile');
})->name('File.addFile');



