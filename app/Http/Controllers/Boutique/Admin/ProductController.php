<?php

namespace App\Http\Controllers\Boutique\Admin;

use App\Http\Controllers\Controller;
use App\Repository\Boutique\ProductRepository;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function index() {
        return view('admin/index', ['products' => $this->productRepository->slice(0, 12)]);
    }

}
