<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function () {
    // Si queremos redireccionar a una ruta lo podemos realizar de dos maneras pasandole la ruta relativa o usar el nombre de una ruta
    // Para el segundo caso es que es el que mas se usa actualmente es mejor usar el metodo to_route() que es lo mismo que un redirect()->route('') pero mas simplificado
    return to_route('contact2');
})->name('contact');

Route::get('/contact2', function () {
    $data = ['greating' => 'Hello'];
    return view('testing_routes/contact2', $data);
})->name('contact2');