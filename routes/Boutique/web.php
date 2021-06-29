<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Boutique\ProductController;

Route::get("/boutique", [ProductController::class, 'showAllProducts'])->name("home.page");