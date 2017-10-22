<?php

use Illuminate\Database\Seeder;

use App\Deposits;

class DepositsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker\Factory::create();

      Deposits::truncate();

      for ($i=0; $i < 50; $i++) {

          $thread = Deposits::create(array('user_id' => $faker->numberBetween($min = 2, $max = 6),
                                          'subject' => $faker->realText(rand(50, 255)),
                                          'key_points' => $faker->realText(rand(150, 500)),
                                          'argument' => $faker->realText(rand(200, 1000))
          ));
      }
    }
}
