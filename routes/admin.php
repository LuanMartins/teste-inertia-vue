<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;



Route::prefix('/admin')->group(function(){
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
})->middleware(['auth', 'verified']);