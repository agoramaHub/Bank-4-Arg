<?php

use Illuminate\Database\Seeder;

use App\Accounts;

class AccountsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
         $faker = Faker\Factory::create();

         Accounts::truncate();

         for ($i=0; $i < 120; $i++) {

             $thread = Accounts::create(array('user_id' => $faker->numberBetween($min = 1, $max = 6),
                                           'argument' => $faker->realText(rand(200, 1000)),
                                           'value' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 999.99)
             ));
         }
     }
}
