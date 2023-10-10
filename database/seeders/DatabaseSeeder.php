<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Nadila Andini',
            'email' => 'nandinihasanah@gmail.com',
            'password' => bcrypt('1228')
        ]);

        User::create([
            'name' => 'Isnanisa Rasyidah',
            'email' => 'isnanr@gmail.com',
            'password' => bcrypt('1258')
        ]);

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt ipsa perferendis quam tempora, quis facere voluptatum quas pariatur odio corporis eos,',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt ipsa perferendis quam tempora, quis facere voluptatum quas pariatur odio corporis eos, reiciendis numquam totam reprehenderit consectetur? Tenetur debitis molestias sit quisquam accusantium minima voluptatibus distinctio excepturi similique. Eveniet illo sed minus veniam laudantium libero vel qui maiores iste placeat minima odio iure excepturi nemo illum totam, dolore ea, laborum fugit et. Nemo dolorem molestias quod quidem quisquam adipisci excepturi, dolores quas recusandae reprehenderit! Modi sed saepe nesciunt in, dolore ut!',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Kedua',
            'slug' => 'judul-kedua',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt ipsa perferendis quam tempora, quis facere voluptatum quas pariatur odio corporis eos,',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt ipsa perferendis quam tempora, quis facere voluptatum quas pariatur odio corporis eos, reiciendis numquam totam reprehenderit consectetur? Tenetur debitis molestias sit quisquam accusantium minima voluptatibus distinctio excepturi similique. Eveniet illo sed minus veniam laudantium libero vel qui maiores iste placeat minima odio iure excepturi nemo illum totam, dolore ea, laborum fugit et. Nemo dolorem molestias quod quidem quisquam adipisci excepturi, dolores quas recusandae reprehenderit! Modi sed saepe nesciunt in, dolore ut!',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ketiga',
            'slug' => 'judul-ketiga',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt ipsa perferendis quam tempora, quis facere voluptatum quas pariatur odio corporis eos,',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt ipsa perferendis quam tempora, quis facere voluptatum quas pariatur odio corporis eos, reiciendis numquam totam reprehenderit consectetur? Tenetur debitis molestias sit quisquam accusantium minima voluptatibus distinctio excepturi similique. Eveniet illo sed minus veniam laudantium libero vel qui maiores iste placeat minima odio iure excepturi nemo illum totam, dolore ea, laborum fugit et. Nemo dolorem molestias quod quidem quisquam adipisci excepturi, dolores quas recusandae reprehenderit! Modi sed saepe nesciunt in, dolore ut!',
            'category_id' => 2,
            'user_id' => 2
        ]);
    }
}
