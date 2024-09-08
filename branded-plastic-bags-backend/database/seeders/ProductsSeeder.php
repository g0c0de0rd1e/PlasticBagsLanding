<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsSeeder extends Seeder
{
    public function run()
    {
        Product::create([
            'name' => 'Standard Bag',
            'price' => 1.99
        ]);

        Product::create([
            'name' => 'Premium Bag',
            'price' => 2.49
        ]);
    }
}
