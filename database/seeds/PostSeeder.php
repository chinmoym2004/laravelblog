<?php

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Model\Post::create([
        	'title'=>'My first Post',
            'slug'=>str_slug('My first Post'),
            'body'=>'<h3>Hello World</h3><p>It\'s b e a u t i full</p>',
            'preview_content'=>'This content will show where you need to show small description about your main content. This you can share as preview to social media too',
            'publish'=>1,
            'user_id'=>1,
            'show'=>1,
            'tags'=>'blog,post,firstpost,testing'
        ]);
    }
}
