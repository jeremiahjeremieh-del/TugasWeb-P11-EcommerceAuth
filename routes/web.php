
<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class, 'index'])
    ->name('products.index');

Route::middleware('auth')->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])
        ->middleware('role:admin')
        ->name('admin.index');
});

require __DIR__.'/auth.php';

Route::middleware('auth')->group(function () {
    Route::view('/dashboard', 'dashboard')
        ->middleware('verified')
        ->name('dashboard');

    Route::middleware('verified')->group(function () {
        Route::get('/profile', [
            \App\Http\Controllers\ProfileController::class,
            'edit'
        ])->name('profile.edit');

        Route::patch('/profile', [
            \App\Http\Controllers\ProfileController::class,
            'update'
        ])->name('profile.update');

        Route::delete('/profile', [
            \App\Http\Controllers\ProfileController::class,
            'destroy'
        ])->name('profile.destroy');
    });
});
