<?php
/*
|--------------------------------------------------------------------------
| Category Factory
|--------------------------------------------------------------------------
|
| This factory generates sample categories for the ecommerce store.
| It includes standard fields like name, slug, and active status.
|
*/

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CategoryFactory extends Factory
{
    protected $model = Category::class;

    public function definition(): array
    {
        $name = $this->faker->unique()->words(2, true);
        return [
            'name' => ucfirst($name),
            'slug' => Str::slug($name),
            'description' => $this->faker->sentence(),
            'is_active' => true,
            'sort_order' => $this->faker->numberBetween(1, 100),
            'meta_title' => ucfirst($name),
            'meta_description' => $this->faker->sentence(),
            'meta_keywords' => implode(', ', $this->faker->words(5)),
        ];
    }
}
