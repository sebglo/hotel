<?php

namespace Database\Factories;

use App\Models\Reservation;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReservationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Reservation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $startingDate = $this->faker->dateTimeBetween('this week', '+6 months');
    $endingDate   =  $this->faker->dateTimeBetween($startingDate, strtotime('+6 months'));

        return [
            //
            'user_id' => \App\Models\User::factory(),
            'chambre_id' => \App\Models\Chambre::factory(),
            'date_debut' => $startingDate,
            'date_fin' => $endingDate,
        ];
    }
}
