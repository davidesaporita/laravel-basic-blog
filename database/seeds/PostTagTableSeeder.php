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
        $tag_ids = Tag::select('id')->get();
        $posts = Post::all();
        $x = 75; // Set probability of having at least one tag
        $y = 40; // Set tag number probability

        foreach($posts as $post) {
            if($faker->boolean($x)) {
                foreach($tag_ids as $tag_id) {
                    if($faker->boolean($y)) {
                        $post->tags()->attach($tag_id);
                    } 
                }
            }
        }
    }
}
