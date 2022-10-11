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

include 'my-merwestad.php';
