<?php

namespace App\Http\Controllers\Boutique;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repository\Boutique\ProductRepository;

class ProductController extends Controller
{
    private $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function showAllProducts () {
        return view('product/index', [
            'products' => $this->productRepository->getAllProducts()
        ]);
    }
}
