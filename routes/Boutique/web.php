<?php

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