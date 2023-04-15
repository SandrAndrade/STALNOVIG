<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;



Route::resource('empleado', EmpleadoController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/',[App\Http\Controllers\UsuarioController::class,'index'])->name('Home');
Route::get('/Cuartos', [App\Http\Controllers\UserController::class, 'index'])->name('CuartoD');
Route::get('/Cuar/{Empleados}', [App\Http\Controllers\UserController::class, 'show']);



Route::get('/Nosotros', function () { return view('Vista2');}) ->name('Noso');



Route::get('Requisitos', function () { return view('vista4');}) ->name('Re');

Route::get('Contactanos', function () { return view('vista5');}) ->name('Conta');

Route::get('Cuar', function () { return view('vista6');})->name('Cuar');

Route::get('Prueba', function () { return view('Pruebas');}) ->name('Pruebas');
