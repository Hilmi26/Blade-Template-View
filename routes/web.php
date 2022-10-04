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

Route::get('/index', function () {
    return view('layout.home');
});

Route::get('/about', function () {
    return view('layout.about');
});

Route::get('/service', function () {
    return view('layout.service');
});

Route::get('/', function () {
    return view('layout.project');
});
