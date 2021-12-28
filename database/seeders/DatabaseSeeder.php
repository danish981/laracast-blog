<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use App\Models\Post;

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
        User::truncate();
        Category::truncate();
        Post::truncate();

        $user = User::factory()->create();

        $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        $family = Category::create([
            'name' => 'Family',
            'slug' => 'family'
        ]);

        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $family->id,
            'title' => 'My Family Post',
            'slug' => 'my-family-post',
            'excerpt' => '<p>this is my family post</p>',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error odio odit aperiam tenetur sequi eligendi. Perspiciatis ex ut quaerat dignissimos alias atque impedit totam corrupti velit cum rerum iusto soluta unde aliquid commodi voluptas iste aperiam, illo non, accusamus laborum. Expedita doloremque molestiae esse ipsum sit dolor, dolore quos nisi laboriosam enim mollitia officiis tenetur nesciunt vero inventore aperiam explicabo veritatis placeat repudiandae nobis nulla. Architecto, nobis commodi voluptatibus quos eveniet nihil, corrupti rerum perspiciatis provident illo odit corporis animi temporibus cumque tempora? Rem numquam quia molestias, libero iste facilis dolore aperiam minima neque non id illum nam sint aspernatur.</p>'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $work->id,
            'title' => 'My Work Post',
            'slug' => 'my-work-post',
            'excerpt' => '<p>this is my work post</p>',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error odio odit aperiam tenetur sequi eligendi. Perspiciatis ex ut quaerat dignissimos alias atque impedit totam corrupti velit cum rerum iusto soluta unde aliquid commodi voluptas iste aperiam, illo non, accusamus laborum. Expedita doloremque molestiae esse ipsum sit dolor, dolore quos nisi laboriosam enim mollitia officiis tenetur nesciunt vero inventore aperiam explicabo veritatis placeat repudiandae nobis nulla. Architecto, nobis commodi voluptatibus quos eveniet nihil, corrupti rerum perspiciatis provident illo odit corporis animi temporibus cumque tempora? Rem numquam quia molestias, libero iste facilis dolore aperiam minima neque non id illum nam sint aspernatur.</p>'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $personal->id,
            'title' => 'My Personal Post',
            'slug' => 'my-personal-post',
            'excerpt' => '<p>this is my personal post</p>',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error odio odit aperiam tenetur sequi eligendi. Perspiciatis ex ut quaerat dignissimos alias atque impedit totam corrupti velit cum rerum iusto soluta unde aliquid commodi voluptas iste aperiam, illo non, accusamus laborum. Expedita doloremque molestiae esse ipsum sit dolor, dolore quos nisi laboriosam enim mollitia officiis tenetur nesciunt vero inventore aperiam explicabo veritatis placeat repudiandae nobis nulla. Architecto, nobis commodi voluptatibus quos eveniet nihil, corrupti rerum perspiciatis provident illo odit corporis animi temporibus cumque tempora? Rem numquam quia molestias, libero iste facilis dolore aperiam minima neque non id illum nam sint aspernatur.</p>'
        ]);
    }
}
