<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Jecky',
            'username' => 'jecky',
            'email' => 'jecky@gmail.com',
            'password' => bcrypt('12345')
        ]);

        // User::create([
        //     'name' => 'Beni',
        //     'email' => 'beni@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Progamming',
            'slug' => 'web-progamming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'Web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'orem ipsum dolor sit amet consectetur adipisicing elit. Nisi corporis, alias repellat saepe magni itaque iste exercitationem. Earum perferendis facilis pariatur asperiores tempora.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi corporis, alias repellat saepe magni itaque iste exercitationem. Earum perferendis facilis pariatur asperiores tempora. Et enim, commodi repellendus at velit perferendis sapiente, quas nulla a beatae reprehenderit voluptatibus omnis suscipit sint accusantium cupiditate qui architecto quaerat vero voluptatum reiciendis iste fuga. Expedita aperiam, repudiandae facilis, magnam, itaque beatae temporibus voluptates aspernatur cum perferendis praesentium amet atque ullam dolor nihil autem omnis ipsa architecto quae quaerat! Temporibus, atque. Pariatur laborum aut molestiae iusto culpa atque nesciunt voluptatibus unde recusandae architecto. Facere sunt voluptate eaque architecto quaerat nihil ab numquam fugiat quas minima.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'orem ipsum dolor sit amet consectetur adipisicing elit. Nisi corporis, alias repellat saepe magni itaque iste exercitationem. Earum perferendis facilis pariatur asperiores tempora.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi corporis, alias repellat saepe magni itaque iste exercitationem. Earum perferendis facilis pariatur asperiores tempora. Et enim, commodi repellendus at velit perferendis sapiente, quas nulla a beatae reprehenderit voluptatibus omnis suscipit sint accusantium cupiditate qui architecto quaerat vero voluptatum reiciendis iste fuga. Expedita aperiam, repudiandae facilis, magnam, itaque beatae temporibus voluptates aspernatur cum perferendis praesentium amet atque ullam dolor nihil autem omnis ipsa architecto quae quaerat! Temporibus, atque. Pariatur laborum aut molestiae iusto culpa atque nesciunt voluptatibus unde recusandae architecto. Facere sunt voluptate eaque architecto quaerat nihil ab numquam fugiat quas minima.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'orem ipsum dolor sit amet consectetur adipisicing elit. Nisi corporis, alias repellat saepe magni itaque iste exercitationem. Earum perferendis facilis pariatur asperiores tempora.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi corporis, alias repellat saepe magni itaque iste exercitationem. Earum perferendis facilis pariatur asperiores tempora. Et enim, commodi repellendus at velit perferendis sapiente, quas nulla a beatae reprehenderit voluptatibus omnis suscipit sint accusantium cupiditate qui architecto quaerat vero voluptatum reiciendis iste fuga. Expedita aperiam, repudiandae facilis, magnam, itaque beatae temporibus voluptates aspernatur cum perferendis praesentium amet atque ullam dolor nihil autem omnis ipsa architecto quae quaerat! Temporibus, atque. Pariatur laborum aut molestiae iusto culpa atque nesciunt voluptatibus unde recusandae architecto. Facere sunt voluptate eaque architecto quaerat nihil ab numquam fugiat quas minima.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'orem ipsum dolor sit amet consectetur adipisicing elit. Nisi corporis, alias repellat saepe magni itaque iste exercitationem. Earum perferendis facilis pariatur asperiores tempora.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi corporis, alias repellat saepe magni itaque iste exercitationem. Earum perferendis facilis pariatur asperiores tempora. Et enim, commodi repellendus at velit perferendis sapiente, quas nulla a beatae reprehenderit voluptatibus omnis suscipit sint accusantium cupiditate qui architecto quaerat vero voluptatum reiciendis iste fuga. Expedita aperiam, repudiandae facilis, magnam, itaque beatae temporibus voluptates aspernatur cum perferendis praesentium amet atque ullam dolor nihil autem omnis ipsa architecto quae quaerat! Temporibus, atque. Pariatur laborum aut molestiae iusto culpa atque nesciunt voluptatibus unde recusandae architecto. Facere sunt voluptate eaque architecto quaerat nihil ab numquam fugiat quas minima.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

    }
}
