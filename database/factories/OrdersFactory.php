<?php

namespace Database\Factories;

use App\Models\Orders;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrdersFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Orders::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'patient_id' => $this->faker->numberBetween(1,15),   
            'status_id' => $this->faker->numberBetween(1,3),
            'date' => $this->faker->date(),
            'user_id' => $this->faker->numberBetween(1,7),
            'is_deleted' => $this->faker->numberBetween(1,0),
        ];
    }
}
