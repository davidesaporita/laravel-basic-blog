<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Post;
use App\Tag;

class PostTagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $tags = Tag::all();
        $posts = Post::all();
        $tags_total_number = count($tags);

        foreach($posts as $post) {
            // 75% of chanches
            if($faker->boolean(75)) { 
                // Random number for tags in this post
                $tags_number_for_post = $faker->numberBetween(1, $tags_total_number);

                // Find unique tag ids (as many as generated random number)
                do {
                    $tag_ids[] = $faker->unique(true)->numberBetween(1, $tags_number_for_post);
                } while (count($tag_ids) < $tags_number_for_post);

                // Populate pivot table
                foreach($tag_ids as $tag_id) {
                    $post->tags()->attach($tag_id);
                }

                // Reset array
                unset($tag_ids);
            }
        }
    }
}
