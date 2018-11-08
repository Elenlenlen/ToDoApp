<?php

use Illuminate\Database\Seeder;
use App\Models\Card;
use App\Models\User;

class CardsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 10; $i++) {
            Card::create([
                'description' => $faker->sentence,
                'priority' => $faker->randomElement($array = array (true, false)),
                'done' => $faker->randomElement($array = array (true, false)),
                'user_id' => $faker->randomElement($array = array(1, 2)),
            ]);
        }
    }
}