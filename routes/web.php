<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\siteController;
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


Route::get('/', [siteController::class, 'index']);
Route::get('/about', [siteController::class, 'about']);
Route::get('/services', [siteController::class, 'services']);
Route::get('/contact', [siteController::class, 'contact']);
