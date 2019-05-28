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
        factory(App\Post::class, 5)->make()
                  ->each(function($post) {
                    $category = App\Category::inRandomOrder()->first();
                    $post->category()->associate($category);
                    $post->save();
                  });
    }
}
