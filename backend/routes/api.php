<?php

use App\Http\Controllers\API\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

// Rotas de Produto
Route::get('products', [ProductController::class, 'index']);
Route::get('products/{id}', [ProductController::class, 'show']);

// Rotas de Categoria
Route::get('categories', [\App\Http\Controllers\API\CategoryController::class, 'index']);
Route::get('categories/{id}', [\App\Http\Controllers\API\CategoryController::class, 'show']);

// Rotas de Pedido
Route::post('orders', [\App\Http\Controllers\API\OrderController::class, 'store']);