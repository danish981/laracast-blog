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

        $user = User::find(2);

        $category = Category::factory()->create([
            'name' => 'Social',
            'slug' => 'social'
        ]);


        Post::factory(5)->create([
            'user_id' => $user->id,
            'category_id' => $category->id
        ]);


    }
}
