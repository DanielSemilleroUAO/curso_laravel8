<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\IndexController;
use App\Http\Controllers\Principal;
use App\Http\Controllers\ProductosController;

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

Route::get('/', IndexController::class);

Route::get('/products', function () {
    return 'Bienvenido a productos';
});

Route::controller(ProductosController::class)->group(function () {
    Route::get('/products', 'index');
    Route::get('/products/crear', 'create');
    Route::get('/products/{productId}', 'show');
});

Route::get('nosotros/autores', [Principal::class, 'create']);

// Colocar en orden las peticiones que tienen parametros
// Route::get('/products', [ProductosController::class, 'index']);
// Route::get('/products/crear', [ProductosController::class, 'create']);
// Route::get('/products/{productId}', [ProductosController::class, 'show']);

// Route::get('/products/{idProduct}', function ($product) {
//     return "El producto seleccionado es $product";
// });

// Route::get('products/{product}/{recibo}', function ($product, $recibo) {
//     return "El producto comprado es: $product que vale $recibo";
// });
