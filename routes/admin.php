<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\OscController;
use App\Http\Controllers\Admin\TramiteController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AacnController;
use App\Http\Controllers\Admin\ObservacionController;

Route::get('', [HomeController::class, 'index'])->name('admin.home');

Route::resource('users', UserController::class)->names('admin.users');

Route::resource('tramites', TramiteController::class)->names('admin.tramites');

Route::get('observacionosc/{id}', [ObservacionController::class, 'download'])->name('admin.obserosc.download');

Route::get('asignar', [OscController::class, 'asignar'])->name('admin.osc.asignar');
Route::post('aceptar', [OscController::class, 'aceptar'])->name('admin.osc.aceptar');

Route::get('revisar', [OscController::class, 'revisar'])->name('admin.osc.revisor');

Route::get('download/{id}', [OscController::class, 'download'])->name('admin.osc.download');
Route::get('finalizar/{id}', [OscController::class, 'finalizar'])->name('admin.osc.finalizar');
Route::get('revisarosc', [OscController::class, 'revisarosc'])->name('admin.osc.revisarosc');
Route::get('download1/{id}', [OscController::class, 'download1'])->name('admin.osc.download1');
Route::post('store', [OscController::class, 'store'])->name('admin.osc.store');
Route::get('estado', [OscController::class, 'estado'])->name('admin.osc.estado');


Route::get('asignaraacn', [AacnController::class, 'asignar'])->name('admin.aacn.asignar');
Route::post('aceptaraacn', [AacnController::class, 'aceptar'])->name('admin.aacn.aceptar');

Route::get('revisoraacn', [AacnController::class, 'revisar'])->name('admin.aacn.revisor');

Route::get('finalizaraacn/{id}', [AacnController::class, 'finalizar'])->name('admin.aacn.finalizar');
Route::get('revisaraacn', [AacnController::class, 'revisaraacn'])->name('admin.aacn.revisaraacn');
Route::post('storeaacn', [AacnController::class, 'store'])->name('admin.aacn.store');
Route::get('estadoaacn', [AacnController::class, 'estado'])->name('admin.aacn.estado');



// Route::get('concluir', [OscController::class, 'concluir']);
Route::post('create', [HomeController::class, 'create'])->name('admin.revisor.create');
// Route::get('', [TramiteController::class, 'revisor']);
