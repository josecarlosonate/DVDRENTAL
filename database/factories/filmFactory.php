<?php

namespace Database\Factories;

use App\Models\film;
use Illuminate\Database\Eloquent\Factories\Factory;

class filmFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = film::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        
        return [
            
            //
            'title' => $this->faker->title,
            'description' => $this->faker->paragraph,
            'release_year' => $this->faker->year,
            'language_id' => $this->faker->randomElement(['1','2','3','4','5','6','7','8','9','10']),
            'original_language_id' => $this->faker->randomElement(['1','2','3','4','5','6','7','8','9','10']),
            'rental_duration' => $this->faker->randomDigitNotNull,
            'rental_rate' => $this->faker->randomDigitNotNull,
            'length' => $this->faker->randomNumber(2),
            'replacement_cost' => $this->faker->randomDigitNotNull,
            'rating' => $this->faker->randomDigitNotNull,
            'special_features' => $this->faker->randomNumber(3),
            'last_update' => $this->faker->dateTimeThisYear('+1 year')->format('Y-m-d H:i:s'),
        ];
    }
}
