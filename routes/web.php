<?php

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Route;

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

if (file_exists(__DIR__ . '/routes.json')) {
    $routes = Collection::make(json_decode(
        file_get_contents(__DIR__ . '/routes.json')
    ));

    $routes->each(function (object $data) {
        Route::get($data->path, $data->controller)->name($data->name);
    });
}
