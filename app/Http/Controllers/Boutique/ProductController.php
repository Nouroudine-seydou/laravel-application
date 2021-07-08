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

    public function index () {
        return view('product/index', [
            'products' => Product::paginate(10)
        ]);
    }

    public function show($slug, int $id) {
        $product = Product::find($id)->first();
        if($product->slug != $slug){
            return redirect()->route('product.show', ['slug' => $product->slug,'id' => $product->id]);
        }
        return view('product/show', ['product' => $product]);
    }
}
