<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     protected $fillable = [
        'name',
        'price',
        'description',
        'slug',
        'image'
    ];

    public function run()
    {
        Product::factory()
                ->count(1500)
                ->create();
    }
}
