<?php

namespace Database\Factories;

use App\Models\Inventory;
use Illuminate\Database\Eloquent\Factories\Factory;

class InventoryFactory extends Factory
{
    protected $model = Inventory::class;

    public function definition(): array
    {
        return [
            'track_stock' => true,
            'stock_qty' => $this->faker->numberBetween(50, 500),
            'reserved_qty' => 0,
            'low_stock_threshold' => 10,
            'is_in_stock' => true,
        ];
    }
}
