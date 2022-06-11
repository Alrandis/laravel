<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'services_id' => $this->faker->services_id(),
            'castomer_car_id' => $this->faker->castomer_car_id(),
            'employee_id' => $this->faker->employee_id(),
            'status' => $this->faker->status(),
            'start_date' => $this->faker->start_date(),
            'end_date' => $this->faker->end_date(),
        ];
    }
}
