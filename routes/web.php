<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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

Route::get('/', [MainController::class, 'welcome']);

Route::get('/pages/about', [MainController::class, 'about']);

Route::get('/pages/design', [MainController::class, 'design']);

Route::get('/pages/shop', [MainController::class, 'shop']);

Route::get('/pages/contact', [MainController::class, 'contact']);