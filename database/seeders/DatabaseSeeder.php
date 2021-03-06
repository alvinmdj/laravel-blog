<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
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
        
        User::create([
           'name' => 'Alvin Martin',
           'username' => 'alvinmdj',
           'email' => 'alvin@admin.com',
           'password' => bcrypt('alvinmartin'),
        ]);

        User::factory(3)->create();
            
        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
        ]);
        
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);
        
        Category::create([
            'name' => 'Mobile Programming',
            'slug' => 'mobile-programming',
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'First Post',
        //     'slug' => 'first-post',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum vel quibusdam corporis, nam aliquid, mollitia facere commodi',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum vel quibusdam corporis, nam aliquid, mollitia facere commodi quaerat molestias eos magnam reiciendis eius. Repudiandae qui voluptatem maxime sit dolorem iste animi repellat soluta asperiores autem explicabo perferendis voluptate mollitia non rerum, ducimus deleniti atque aperiam aspernatur tempore in. Quo distinctio rerum reiciendis ducimus. Aliquid totam optio ratione reiciendis, possimus eos.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum vel quibusdam corporis, nam aliquid, mollitia facere commodi quaerat molestias eos magnam reiciendis eius. Repudiandae qui voluptatem maxime sit dolorem iste animi repellat soluta asperiores autem explicabo perferendis voluptate mollitia non rerum, ducimus deleniti atque aperiam aspernatur tempore in. Quo distinctio rerum reiciendis ducimus. Aliquid totam optio ratione reiciendis, possimus eos.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1,
        // ]);

        // Post::create([
        //     'title' => 'Second Post',
        //     'slug' => 'second-post',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum vel quibusdam corporis, nam aliquid, mollitia facere commodi',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum vel quibusdam corporis, nam aliquid, mollitia facere commodi quaerat molestias eos magnam reiciendis eius. Repudiandae qui voluptatem maxime sit dolorem iste animi repellat soluta asperiores autem explicabo perferendis voluptate mollitia non rerum, ducimus deleniti atque aperiam aspernatur tempore in. Quo distinctio rerum reiciendis ducimus. Aliquid totam optio ratione reiciendis, possimus eos.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum vel quibusdam corporis, nam aliquid, mollitia facere commodi quaerat molestias eos magnam reiciendis eius. Repudiandae qui voluptatem maxime sit dolorem iste animi repellat soluta asperiores autem explicabo perferendis voluptate mollitia non rerum, ducimus deleniti atque aperiam aspernatur tempore in. Quo distinctio rerum reiciendis ducimus. Aliquid totam optio ratione reiciendis, possimus eos.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1,
        // ]);
        
        // Post::create([
        //     'title' => 'Third Post',
        //     'slug' => 'third-post',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum vel quibusdam corporis, nam aliquid, mollitia facere commodi',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum vel quibusdam corporis, nam aliquid, mollitia facere commodi quaerat molestias eos magnam reiciendis eius. Repudiandae qui voluptatem maxime sit dolorem iste animi repellat soluta asperiores autem explicabo perferendis voluptate mollitia non rerum, ducimus deleniti atque aperiam aspernatur tempore in. Quo distinctio rerum reiciendis ducimus. Aliquid totam optio ratione reiciendis, possimus eos.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum vel quibusdam corporis, nam aliquid, mollitia facere commodi quaerat molestias eos magnam reiciendis eius. Repudiandae qui voluptatem maxime sit dolorem iste animi repellat soluta asperiores autem explicabo perferendis voluptate mollitia non rerum, ducimus deleniti atque aperiam aspernatur tempore in. Quo distinctio rerum reiciendis ducimus. Aliquid totam optio ratione reiciendis, possimus eos.</p>',
        //     'category_id' => 2,
        //     'user_id' => 2,
        // ]);
    }
}
