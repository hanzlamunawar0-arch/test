<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Clear existing products first to avoid duplicates
        \App\Models\Product::truncate();

        // Seed 8 high-quality products across different brands and categories
        $products = [
            [
                'img' => '/assets/pic1.jpg',
                'brand' => 'Adidas',
                'title' => 'Adidas Ultraboost Light',
                'rating' => 4.8,
                'reviews' => 154,
                'sellPrice' => 17999.00,
                'orders' => '420',
                'mrp' => '19999.00',
                'discount' => 10,
                'category' => 'men',
            ],
            [
                'img' => '/assets/pic2.jpg',
                'brand' => 'Puma',
                'title' => 'Puma Softride Sophia',
                'rating' => 4.4,
                'reviews' => 98,
                'sellPrice' => 4999.00,
                'orders' => '310',
                'mrp' => '6999.00',
                'discount' => 28,
                'category' => 'women',
            ],
            [
                'img' => '/assets/pic3.jpg',
                'brand' => 'Skechers',
                'title' => 'Skechers Go Walk Max',
                'rating' => 4.6,
                'reviews' => 215,
                'sellPrice' => 5499.00,
                'orders' => '680',
                'mrp' => '5999.00',
                'discount' => 8,
                'category' => 'men',
            ],
            [
                'img' => '/assets/pic4.jpg',
                'brand' => 'Nike',
                'title' => 'Nike Air Max 270',
                'rating' => 4.9,
                'reviews' => 320,
                'sellPrice' => 13995.00,
                'orders' => '840',
                'mrp' => '14995.00',
                'discount' => 6,
                'category' => 'men',
            ],
            [
                'img' => '/assets/pic5.jpg',
                'brand' => 'Nike',
                'title' => 'Nike Star Runner 4 Kids',
                'rating' => 4.3,
                'reviews' => 54,
                'sellPrice' => 3495.00,
                'orders' => '150',
                'mrp' => '3995.00',
                'discount' => 12,
                'category' => 'child',
            ],
            [
                'img' => '/assets/pic1.jpg',
                'brand' => 'Puma',
                'title' => 'Puma Wired Run Kids',
                'rating' => 4.1,
                'reviews' => 38,
                'sellPrice' => 2999.00,
                'orders' => '90',
                'mrp' => '3999.00',
                'discount' => 25,
                'category' => 'child',
            ],
            [
                'img' => '/assets/pic2.jpg',
                'brand' => 'Adidas',
                'title' => 'Adidas Grand Court Women',
                'rating' => 4.5,
                'reviews' => 112,
                'sellPrice' => 5999.00,
                'orders' => '340',
                'mrp' => '6999.00',
                'discount' => 14,
                'category' => 'women',
            ],
            [
                'img' => '/assets/pic3.jpg',
                'brand' => 'Skechers',
                'title' => 'Skechers D\'Lites Women',
                'rating' => 4.7,
                'reviews' => 180,
                'sellPrice' => 6999.00,
                'orders' => '520',
                'mrp' => '7999.00',
                'discount' => 12,
                'category' => 'women',
            ],
        ];

        foreach ($products as $productData) {
            \App\Models\Product::create($productData);
        }
    }
}
