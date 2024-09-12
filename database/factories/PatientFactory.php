<?php

namespace Database\Factories;

use App\Models\Patient;
use Illuminate\Database\Eloquent\Factories\Factory;

class PatientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Patient::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [ 
            'name' => $this->faker->name(),
            'title' => $this->faker->name(),
            'email' => $this->faker->safeEmail(),
            'phone' => $this->faker->phoneNumber(),
            'barth_date' => $this->faker->date(), 
            'blood_id' => $this->faker->numberBetween(1,3),
            'is_deleted' => $this->faker->numberBetween(1,0),
        ];
    }
}
