<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MascotaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return redirect()->route('mascotas.index');
});

Route::resource('mascotas', MascotaController::class);

