<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\JobAppliationController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::domain('recruit.' . config('app.site_url'))
    ->name('application.')
    ->group(function () {
        // Route::get('/', function () {
        //     return redirect()->route('application.hello');
        // })->name('hello');

        Route::get('/', [JobAppliationController::class, 'create'])
            ->middleware('guest')
            ->name('/');

        Route::post('/store', [JobAppliationController::class, 'store'])
            ->middleware('guest')
            ->name('store');

        Route::get('/listing', [JobAppliationController::class, 'index'])
            ->middleware('auth')
            ->name('index');

        Route::get('/{id}', [JobAppliationController::class, 'show'])
            ->middleware('auth')
            ->name('show');

        Route::get('/{id}/edit', [JobAppliationController::class, 'edit'])
            ->middleware('guest')
            ->name('edit');

        Route::put('/{id}', [JobAppliationController::class, 'update'])
            ->middleware('guest')
            ->name('update');

        Route::put('/{id}/restore', [JobAppliationController::class, 'restore'])
            ->middleware(['auth', 'role:super-admin|admin'])
            ->name('restore');

        Route::delete('/{id}/delete', [JobAppliationController::class, 'delete'])
            ->middleware(['auth', 'role:super-admin|admin'])
            ->name('delete');

        Route::delete('/{id}/destroy', [JobAppliationController::class, 'destroy'])
            ->middleware(['auth', 'role:super-admin|admin'])
            ->name('destroy');
    });

Route::domain('admin.' . config('app.site_url'))->name('admin.')->group(function () {
    Route::resource('roles', RoleController::class)
        ->middleware('auth');

    Route::get('/', [AuthenticatedSessionController::class, 'create'])
        ->middleware('guest')
        ->name('index');

    Route::view('/lock', 'auth.confirm-password')
        ->middleware('password.confirm')
        ->name('confirm.password');

    Route::middleware('auth')->group(function () {
        Route::get('/dashboard', [UserController::class, 'index'])
            ->name('dashboard');

        Route::get('/user/{user}', [UserController::class, 'show'])
            ->name('show');

        Route::get('/user/{user}/edit', [UserController::class, 'edit'])
            ->name('edit');

        Route::put('/user/{user}', [UserController::class, 'update'])
            ->name('update');

        Route::put('/user/{user}/restore', [UserController::class, 'restore'])
            ->middleware(['role:super-admin|admin'])
            ->name('restore');

        Route::delete('/user/{user}/delete', [UserController::class, 'delete'])
            ->middleware(['role:super-admin|admin'])
            ->name('delete');

        Route::delete('/user/{user}/destroy', [UserController::class, 'destroy'])
            ->middleware(['role:super-admin'])
            ->name('destroy');
    });
});

// require __DIR__ . '/auth.php';
