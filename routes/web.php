<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ConnectController;
use App\Http\Controllers\PastEventsController;
use App\Http\Controllers\HomeController;
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

Route::resources([
    '' => HomeController::class,
    'events' => PastEventsController::class,
    'blog' => BlogController::class,
    'connect' => ConnectController::class
]);

