<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
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


    /**
     * Auth.routes()
     * Seriiously be careful when editing these!
     */
    Route::get('/register', [RegisteredUserController::class, 'create'])
        ->middleware(['auth', 'role:super-admin', 'permission:create'])
        ->name('register');

    Route::post('/register', [RegisteredUserController::class, 'store'])
        ->middleware(['auth', 'role:super-admin', 'permission:create'])
        ->name('register.store');

    Route::get('/login', [AuthenticatedSessionController::class, 'create'])
        ->middleware('guest')
        ->name('login');

    Route::post('/login', [AuthenticatedSessionController::class, 'store'])
        ->middleware('guest')
        ->name('login.store');

    Route::get('/forgot-password', [PasswordResetLinkController::class, 'create'])
        ->middleware('guest')
        ->name('password.request');

    Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])
        ->middleware('guest')
        ->name('password.email');

    Route::get('/reset-password/{token}', [NewPasswordController::class, 'create'])
        ->middleware('guest')
        ->name('password.reset');

    Route::post('/reset-password', [NewPasswordController::class, 'store'])
        ->middleware('guest')
        ->name('password.update');

    Route::get('/verify-email', [EmailVerificationPromptController::class, '__invoke'])
        ->middleware('auth')
        ->name('verification.notice');

    Route::get('/verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
        ->middleware(['auth', 'signed', 'throttle:6,1'])
        ->name('verification.verify');

    Route::post('/email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
        ->middleware(['auth', 'throttle:6,1'])
        ->name('verification.send');

    Route::get('/confirm-password', [ConfirmablePasswordController::class, 'show'])
        ->middleware('auth')
        ->name('password.confirm');

    Route::post('/confirm-password', [ConfirmablePasswordController::class, 'store'])
        ->middleware('auth')
        ->name('password.confirm.unlock');

    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
        ->middleware('auth')
        ->name('logout');
});
