<?php

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

use Creode\LaravelNovaFaqs\Http\Controllers\FAQsController;

Route::prefix('faqs')->group(function () {
    Route::get('/', [FAQsController::class, 'index']);
});
