<?php

namespace Database\Factories;

use App\Models\Chambre;
use Illuminate\Database\Eloquent\Factories\Factory;

class ChambreFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Chambre::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'taille' => $this->faker->numberBetween(20,100),
            'prix' => $this->faker->numberBetween(80,200),
            'nombre_de_lit' => $this->faker->numberBetween(1,8),
            'type_de_lit' => $this->faker->randomElement(['simple', 'double']),
            'balcon' => $this->faker->randomElement(['avec', 'sans']),

        ];
    }
}
