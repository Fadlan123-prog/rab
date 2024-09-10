<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessagesController;

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::post('/message', [MessagesController::class, 'sendEmail'])->name('message.send');
