<?php

use Illuminate\Database\Seeder;

use App\Comments;

class CommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker\Factory::create();

      Comments::truncate();

      for ($i=0; $i < 20; $i++) {

          $comment = Comments::create(array('forum_id' => $faker->numberBetween($min = 1, $max = 20),
                                            'user_id' => $faker->numberBetween($min = 2, $max = 5),
                                            'body'    => $faker->realText(rand(200, 1000))
          ));
      }
    }

}
