<?php

use Illuminate\Database\Seeder;

use App\Forum;

class ForumthreadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        Forum::truncate();

        for ($i=0; $i < 20; $i++) {

            $thread = Forum::create(array('subject' => $faker->realText(rand(40, 150)),
                                          'content' => $faker->realText(rand(200, 1000)),
                                          'user_id' => $faker->numberBetween($min = 1, $max = 5)
            ));
        }
    }
}
