<?php

use App\Mesechta;

Route::get('/', function () {
    return view('index');
});


Route::get('/mesechtos', function () {

    $mesechtos = Mesechta::all();

    return view('mesechtos', compact('mesechtos'));
});
