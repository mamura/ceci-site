<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SiteController::class, 'show'])->name('home');
Route::get('/{slug}', [SiteController::class, 'show'])->where('slug', '.*');
