<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserTableSeeder::class,
            InfoUserTableSeeder::class,
            PostsTableSeeder::class,
            CommentTableSeeder::class,
            TagTableSeeder::class
        ]);
    }
}
