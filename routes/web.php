<?php

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
    return view('index');
});


Route::get('/mesechtos', function () {

//    $mesechtos = [
//        'Brachos',
//        'Shabbos',
//        'Eruvin',
//        'Pesachim',
//        'Shekalim'
//    ];

    $mesechtos = \Illuminate\Support\Facades\DB::table('mesechtos')->get();

//    return $mesechtos;

    return view('mesechtos', compact('mesechtos'));
});
