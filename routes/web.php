<?php

use App\Http\Controllers\controladorVistas;

use Illuminate\Support\Facades\Route;

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

Route::controller(controladorVistas::class)->group
    (function(){
        Route::get('/','vistaWelcome');
        Route::get('form','vistaFormulario');
        Route::get('tab','vistaTabla');
        Route::post('EnviaForm','enviaForm');
    }
);