<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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

//Route::get('/empresas', 'EmpresasController@index');
//Route::get('/empresas/create', 'App\Http\Controllers\EmpresasController@create');

//    App\Http\Controllers\

Route::resource('empresas', 'App\Http\Controllers\EmpresasController');

Route::resource('empleados', 'App\Http\Controllers\EmpleadosController');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
