<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ModeradorController;



Route::get('/', [App\Http\Controllers\PortafolioController::class, 'index']);

Route::resource('proyecto', ProyectoController::class)->middleware('auth');

Auth::routes(['register'=>false,'reset'=>false]);

Route::get('/home', [ProyectoController::class, 'index'])->name('home');

Route::group(['middleware'=> 'auth'], function(){
   Route::get('/home', [ProyectoController::class, 'index'])->name('home');
});

Route::resource('/users', UserController::class);

Route::resource('/moders', ModeradorController::class);