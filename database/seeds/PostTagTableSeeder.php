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
                $tags_number_for_post = rand(1, 4);
                $tag_counter = 0;
                $tag_ids = array();

                // Find unique tag ids (as many as generated random number)
                do {

                    $temp_id = rand(1, $tags_total_number);
                    
                    if(!in_array($temp_id, $tag_ids)) {
                        $tag_ids[] = $temp_id;
                    }
                    
                } while (count($tag_ids) < $tags_number_for_post);

                // Populate pivot table
                $post->tags()->attach($tag_ids);

                // Reset array
                unset($tag_ids);
            }
        }
    }
}
