<?php

use App\Http\Controllers\Boutique\Admin\ProductController as AdminProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Boutique\ProductController;

/**
 * Route pour la vue des produits
 */
Route::get("/boutique", [ProductController::class, 'showAllProducts'])->name("home.page");

/**
 * Route pour la vue d'un seul produit
 */

Route::get('/boutique/{slug}-{id}', [ProductController::class, 'showProduct'])
    ->where(['id' => '[0-9]+', 'slug' => '[a-z\-]+'])
    ->name("product.show");


Route::prefix('admin')->group(function () {
    Route::get('/boutique', [AdminProductController::class, 'index'])->name('admin.shop.index');
});