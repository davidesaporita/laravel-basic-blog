<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Comment;
use App\Post;
use App\User;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $users = User::all();
        $posts = Post::all();

        $comment_number = 100;
        
        for ($i = 0; $i < $comment_number; $i++) {
            $newComment = new Comment();
            $newComment->user_id = $users->random()->id;
            $newComment->post_id = $posts->random()->id;
            $newComment->title = $faker->words($faker->numberBetween(2,8), true);
            $newComment->body = $faker->paragraphs($faker->numberBetween(1,3), true);
            $newComment->save();
        }
    }
}
