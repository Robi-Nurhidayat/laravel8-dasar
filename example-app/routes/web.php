<?php

use Illuminate\Support\Facades\Route;

use function Ramsey\Uuid\v1;

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
    return view('home');
});


Route::get('/contact', function(){


    return view('contact');
});


Route::get('/about', function(){

    return view('about');
});


Route::get('/myProfile', function(){

    $nama = 'Robi Nurhidayat';
    return view('myProfile', ['nama' => $nama]);
});
