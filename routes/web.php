<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Tramite;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('busqueda', function () {
    return view('busqueda');
});

Route::get('inicio', function () {
    return view('inicio');
});

Route::post('busqueda', function (Request $request) {
    $tramite = Tramite::find($request->id);
    return view('busqueda', compact('tramite'));
})->name('web.busqueda');