<?php

namespace App\Models;

class Post
{
     private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            'slug' => 'judul-post-pertama',
            'author' => 'Jecky',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit vero excepturi nesciunt provident accusantium molestias soluta consectetur optio culpa nulla rerum itaque magni nemo est, pariatur quam quae cupiditate, quasi esse, sequi et incidunt eos totam. Dolore distinctio ea illo voluptatibus, assumenda, quae ratione itaque qui tempora maiores possimus perferendis suscipit totam, cum soluta quia repellat sequi? Asperiores non assumenda nobis consectetur commodi laboriosam illo, atque beatae. Rem magnam ducimus tempora porro sapiente aliquam repellendus, consequuntur nam voluptatum officiis alias!'
        ],
        [
            "title" => "Judul  Post Kedua",
            'slug' => 'judul-post-kedua',
            'author' => 'Rahman',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit vero excepturi nesciunt provident accusantium molestias soluta consectetur optio culpa nulla rerum itaque magni nemo est, pariatur quam quae cupiditate, quasi esse, sequi et incidunt eos totam. Dolore distinctio ea illo voluptatibus, assumenda, quae ratione itaque qui tempora maiores possimus perferendis suscipit totam, cum soluta quia repellat sequi? Asperiores non assumenda nobis consectetur commodi laboriosam illo, atque beatae. Rem magnam ducimus tempora porro sapiente aliquam repellendus, consequuntur nam voluptatum officiis alias!'
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
