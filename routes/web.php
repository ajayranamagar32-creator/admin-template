<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SiteController;

Route::get('/', [SiteController::class,'home']);

Route::get('/form', [SiteController::class,'first'])->name('show.form');