<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    protected $model = Order::class;

    public function definition(): array
    {
        $status = $this->faker->randomElement(['pending', 'processing', 'shipped', 'delivered', 'cancelled']);
        $paymentStatus = $status === 'delivered' ? 'paid' : $this->faker->randomElement(['pending', 'paid', 'failed']);
        
        return [
            'order_number' => $this->faker->unique()->numberBetween(100000, 999999),
            'status' => $status,
            'payment_status' => $paymentStatus,
            'payment_method' => $this->faker->randomElement(['cod', 'online', 'bank_transfer']),
            'currency' => 'INR',
            'customer_name' => $this->faker->name(),
            'customer_email' => $this->faker->safeEmail(),
            'customer_phone' => $this->faker->numerify('##########'),
            'shipping_name' => $this->faker->name(),
            'shipping_phone' => $this->faker->numerify('##########'),
            'shipping_address_line_1' => $this->faker->streetAddress(),
            'shipping_city' => $this->faker->city(),
            'shipping_state' => $this->faker->state(),
            'shipping_postal_code' => $this->faker->postcode(),
            'shipping_country' => 'India',
            'subtotal' => 0, // Will be calculated
            'tax_total' => 0, // Will be calculated
            'shipping_total' => $this->faker->randomElement([0, 50, 100]),
            'discount_total' => 0,
            'grand_total' => 0, // Will be calculated
            'placed_at' => $this->faker->dateTimeBetween('-1 month', 'now'),
        ];
    }
}
