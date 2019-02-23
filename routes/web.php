<?php


Route::get('/', function () {
    return view('welcome');
});


Route::get('info', function () {

    return view('info');
});

Route::get('acerca', function () {

    return view('acerca');
});

Route::get('nota', function () {

    return view('nota');
});
