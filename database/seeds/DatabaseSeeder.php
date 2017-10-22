<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // $this->call(ForumthreadSeeder::class);
        // $this->call(CommentsSeeder::class);
        // $this->call(AccountsSeeder::class);
        $this->call(DepositsSeeder::class);
    }
}
