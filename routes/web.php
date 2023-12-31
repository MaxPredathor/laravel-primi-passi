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
    $name = 'Max';
    return view('home', compact('name'));
})->name('home');

Route::get('/about', function () {
    $name = 'Max';
    return view('pages.about', compact('name'));
})->name('about');

Route::get('/brand', function () {
    $brandsname = [ 'Apple', 'Samsung', 'Xiaomi', 'Huawei', 'Sony'];
    return view('pages.brand', compact('brandsname'));
})->name('brand');
