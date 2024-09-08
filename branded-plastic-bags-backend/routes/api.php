<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\CostController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('api')
    ->group(function () {
        Route::get('/products', [ProductController::class, 'index'])
             ->name('products.index');

        Route::post('/products', [ProductController::class, 'store'])
             ->name('products.store');

        Route::get('/products/{id}', [ProductController::class, 'show'])
             ->name('products.show');

        Route::put('/products/{id}', [ProductController::class, 'update'])
             ->name('products.update');

        Route::delete('/products/{id}', [ProductController::class, 'destroy'])
             ->name('products.destroy');

        Route::get('/calculate-cost', [CostController::class, 'calculate'])
             ->name('calculate-cost');
    });

