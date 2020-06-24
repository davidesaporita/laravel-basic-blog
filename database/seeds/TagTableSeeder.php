<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Tag;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = [
            'PHP',
            'Laravel 7',
            'Wordpress',
            'Suite Adobe',
            'Photoshop',
            'InDesign',
            'Educational',
            'Taylor Otwell',
            'Francois Zaninotto',
            'Fanzinotto'
        ];

        foreach($tags as $tag) {
            $newTag = new Tag();
            $newTag->name = $tag;
            $newTag->slug = Str::slug($tag, '-');
            $newTag->save();
        }
    }
}
