<?php

namespace Database\Factories;

use App\Models\actor;
use Illuminate\Database\Eloquent\Factories\Factory;

class actorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = actor::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'last_update' => $this->faker->dateTimeThisYear('+1 year')->format('Y-m-d H:i:s')
            
        ];
    }
}
