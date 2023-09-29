<?php

use Illuminate\Support\Facades\Route;


Route::get('/pruebas', function () {
    return view('pruebas.index');
});
Route::get('/holaaaa', function(){
    return view('pruebas.index');
})->name('hola');


