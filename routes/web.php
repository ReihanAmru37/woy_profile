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

Route::get('/login', function () {
    //return view('home.index');
    $data = [
        'content' => 'beranda/login/index'
    ];
    return view ('beranda.layouts.wrapper', $data);
});

Route::get('/', function () {
    //return view('home.index');
    $data = [
        'content' => 'beranda/home/index'
    ];
    return view ('beranda.layouts.wrapper', $data);
});

Route::get('/fitur', function () {
    //return view('home.index');
    $data = [
        'content' => 'beranda/fitur/index'
    ];
    return view ('beranda.layouts.wrapper', $data);
});

Route::get('/desain', function () {
    //return view('home.index');
    $data = [
        'content' => 'beranda/desain/index'
    ];
    return view ('beranda.layouts.wrapper', $data);
});

Route::get('/paket', function () {
    //return view('home.index');
    $data = [
        'content' => 'beranda/paket/index'
    ];
    return view ('beranda.layouts.wrapper', $data);
});

Route::get('/cara', function () {
    //return view('home.index');
    $data = [
        'content' => 'beranda/cara/index'
    ];
    return view ('beranda.layouts.wrapper', $data);
});