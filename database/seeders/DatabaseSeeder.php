<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $products = Product::factory(20)->create();

        for ($i = 0; $i < 10; $i++) {
            Category::factory()->create([
                'product_id' => $products->random()->id,
            ]);
        }
    }
}
