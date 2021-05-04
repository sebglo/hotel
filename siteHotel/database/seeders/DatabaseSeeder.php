<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Reservation;
use App\Models\Chambre;




class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$user =  User::factory(10)->create();

        //$chambre = Chambre::factory(10)->create();

        $reservation = Reservation::factory(10)
            ->has(User::factory()->count(10))
            ->has(Chambre::factory()->count(10))
            ->create();
    }
}
