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

// string
Route::get('/coba', function () {
    return "haloo:D";
});

// array
Route::get('/coba1', function(){
    return ['Muhammad', 'Haris', 'Al', 'Fikri'];
});

// object json
Route::get('/coba2', function(){
    return[
        'Nama' => "Muhammad Haris Al Fikri",
        'kelas' => "XII RPL 5",
        'No' => 234567
    ];
});

// object json
Route::get('/coba3', function(){
    return response() ->json(
        [
            'Nama' => "Muhammad Haris Al Fikri",
            'kelas' => "XII RPL 5",
            'No' => "1234567"
        ]
        );
});
