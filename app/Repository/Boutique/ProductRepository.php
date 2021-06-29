<?php

namespace App\Repository\Boutique;

use App\Models\Product;

class ProductRepository {

    private $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function getAllProducts() {
        return $this->product->newQuery()
                            ->select()
                            //->limit(12)
                            ->get();
    }   
}