<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Merwestad\DashboardController;
use App\Http\Controllers\Auth\RegisterRequestController;
use App\Http\Controllers\Auth\SendNewPasswordController;
use App\Http\Controllers\Auth\NewPasswordSendController;
use App\Http\Controllers\Association\RecreationController;
use App\Http\Controllers\Auth\ForgottenPasswordController;
use App\Http\Controllers\Association\CompetitionController;
use App\Http\Controllers\Auth\AuthenticateSessionController;
use App\Http\Controllers\Auth\RegistrationCompleteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('', WelcomeController::class)
    ->name('welcome');

Route::name('association.')
    ->prefix('vereniging')
    ->group(function () {
        Route::get('recreatief', RecreationController::class)
            ->name('recreation');

        Route::get('competitie', CompetitionController::class)
            ->name('competition');
    });

Route::get('contact', ContactController::class)
    ->name('contact');

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
