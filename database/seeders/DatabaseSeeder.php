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

        // $user = User::find(3);
        // $category = Category::find(3);

        // Post::factory(10)->create([
        //     'user_id' => $user->id,
        //     'category_id' => $category->id
        // ]);

        Post::factory(10)->create();
    }
}
