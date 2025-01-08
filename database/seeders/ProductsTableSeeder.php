<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $products = [
            ['name' => 'iPhone 15', 'description' => 'Latest model with advanced features.', 'status' => 1],
            ['name' => 'Samsung Galaxy Tablet', 'description' => 'High-performance tablet with vivid display.', 'status' => 1],
            ['name' => 'Tesla Model 3', 'description' => 'Electric car with autopilot technology.', 'status' => 1],
            ['name' => 'Apple Watch Series 9', 'description' => 'Smartwatch with health monitoring.', 'status' => 1],
            ['name' => 'Sony WH-1000XM5 Headphones', 'description' => 'Noise-cancelling over-ear headphones.', 'status' => 1],
            ['name' => 'Gaming Laptop', 'description' => 'High-end laptop for gamers and creators.', 'status' => 0],
            ['name' => 'Bluetooth Speaker', 'description' => 'Portable speaker with deep bass.', 'status' => 1],
            ['name' => '4K Smart TV', 'description' => 'Ultra HD television with streaming apps.', 'status' => 0],
            ['name' => 'Wireless Mouse', 'description' => 'Ergonomic mouse for daily use.', 'status' => 1],
            ['name' => 'Home Security Camera', 'description' => 'Smart camera with night vision.', 'status' => 1],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
