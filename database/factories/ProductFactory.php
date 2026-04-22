<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition(): array
    {
        $name = $this->faker->unique()->words(3, true);
        $basePrice = $this->faker->randomFloat(2, 500, 5000);
        $costPrice = $basePrice * 0.7;
        
        return [
            'name' => ucfirst($name),
            'slug' => Str::slug($name),
            'sku' => $this->faker->unique()->bothify('NB-####-????'),
            'product_type' => 'simple',
            'is_variant_enabled' => false,
            'brand' => $this->faker->company(),
            'hsn_code' => $this->faker->numerify('2106####'),
            'short_description' => $this->faker->sentence(10),
            'description' => $this->faker->paragraphs(3, true),
            'base_price' => $basePrice,
            'compare_at_price' => $basePrice + $this->faker->randomFloat(2, 100, 500),
            'cost_price' => $costPrice,
            'shipping_price' => $this->faker->randomFloat(2, 0, 100),
            'currency' => 'INR',
            'is_active' => true,
            'is_featured' => $this->faker->boolean(20),
            'published_at' => now(),
            'meta_title' => ucfirst($name),
            'meta_description' => $this->faker->sentence(),
            'meta_keywords' => implode(', ', $this->faker->words(5)),
        ];
    }
}
