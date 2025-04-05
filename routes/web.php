<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RequestController;

Route::get('/', function () {
    return view('home');
})->name('home');
Route::post('/requests', [RequestController::class, 'store'])->name('requests.store');


