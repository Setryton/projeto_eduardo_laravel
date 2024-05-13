<?php

use App\Http\Controllers\ClienteController;
use GuzzleHttp\Psr7\Request;
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

Route::get('/cliente', [ClienteController::class, 'index']);

Route::get('/inicio', function () {
    
});

//Route::post('/cadastrar-cliente', function (Request $cliente) {
//    dd($cliente->all());
//});