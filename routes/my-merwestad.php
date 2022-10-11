<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Merwestad\DashboardController;
use App\Http\Controllers\Auth\SendNewPasswordController;
use App\Http\Controllers\Auth\NewPasswordSendController;
use App\Http\Controllers\Auth\RegisterRequestController;
use App\Http\Controllers\Auth\ForgottenPasswordController;
use App\Http\Controllers\Auth\AuthenticateSessionController;
use App\Http\Controllers\Auth\RegistrationCompleteController;

Route::name('my-merwestad.')
    ->prefix('mijn-merwestad')
    ->group(function () {

        // Login
        Route::get('inloggen', LoginController::class)
            ->name('login');
        Route::post('inloggen', AuthenticateSessionController::class);

        // Wachtwoord vergeten
        Route::get('wachtwoord-vergeten', ForgottenPasswordController::class)
            ->name('forgotten-password');
        Route::post('wachtwoord-vergeten', SendNewPasswordController::class);

        Route::get(
            'wachtwoord-vergeten/verzonden',
            NewPasswordSendController::class,
        )->name('new-password-send');

        // Registreren
        Route::get('registreren', RegisterController::class)
            ->name('register');
        Route::post('registreren', RegisterRequestController::class);

        // Registreren succes
        Route::get(
            'registreren/succes',
            RegistrationCompleteController::class,
        )->name('registered');

        Route::middleware('auth')
            ->group(function () {
                Route::get('', DashboardController::class)
                    ->name('dashboard');

                Route::post('uitloggen', LogoutController::class)
                    ->name('logout');
            });
    });
