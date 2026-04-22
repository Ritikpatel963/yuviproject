<?php

namespace Database\Factories;

use App\Models\TaxRate;
use Illuminate\Database\Eloquent\Factories\Factory;

class TaxRateFactory extends Factory
{
    protected $model = TaxRate::class;

    public function definition(): array
    {
        return [
            'name' => 'GST 18%',
            'code' => 'GST18',
            'rate' => 18.00,
            'description' => 'Standard GST for nutrition products',
            'is_active' => true,
            'sort_order' => 1,
        ];
    }
}
