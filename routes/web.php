<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservationController;

// Routes vers les pages
Route::get('/', fn () => view('oh ya'));
Route::get('/altaglio', fn () => view('alteg'));
Route::get('/el-behi', fn () => view('el behi'));
Route::get('/el-chikh', fn () => view('el chikh'));
Route::get('/nos-livreurs', fn () => view('nos livreur'));
Route::get('/oma', fn () => view('oma'));
Route::get('/reservez', fn () => view('reservez'));
Route::get('/roue-de-chance', fn () => view('roue de chance'));
Route::get('/sellem', fn () => view('sellem'));
Route::get('/sushi-house', fn () => view('sushi house'));
Route::get('/resto', fn () => view('nos restos'));

// Route POST pour les réservations
Route::post('/reservations', [ReservationController::class, 'store'])->name('reservations.store');
