<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->words(3, true), // Menghasilkan 3 kata random untuk nama produk
            'qty' => fake()->numberBetween(1, 100), // Angka random antara 1 - 100
            'price' => fake()->randomFloat(2, 10000, 500000), // Angka desimal (harga), misal: 15000.50
            'user_id' => User::factory(), // Otomatis mengaitkan ke ID dari UserFactory
        ];
    }
}