<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Post;
use App\User;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $post_number = 40;
        $users = User::all();

        for($i = 0; $i < $users->count(); $i++) {
            $newPost = new Post();
            
            $newPost->user_id = $users->random()->id;
            $newPost->title = $faker->text(50);
            $newPost->body = $faker->paragraphs(4, true);

            $newPost->save();
        }
    }
}
