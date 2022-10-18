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

Route::get('/coba', function () {
    return "haloo";
});
//array
Route::get('coba1', function(){
    return ['Nia', 'Novela', 'Ariandini'];
});

//object json
Route::get('coba2', function(){
    return [
        'Nama' => 'Nia',
        'Kelas' => 'XII RPL 5',
        'NIS' => 3103120162
    ];
});

//object json
Route::get('coba3', function(){
    return response()->json(
        [
            'Nama' => 'Nia',
            'Kelas' => 'XII RPL 5',
            'NIS' => 3103120162
        ],201
    );
});
