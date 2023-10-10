<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Tulisan Pertama",
            "slug" => "judul-tulisan-pertama",
            "author" => "Nadila Andini",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem in distinctio maiores laboriosam, error porro architecto voluptatibus mollitia libero eos, quia veritatis, dolorum fuga nam. Ducimus, asperiores corrupti cupiditate deserunt animi veritatis. Quasi deleniti laborum rerum consequatur explicabo accusantium debitis repudiandae facilis molestiae nesciunt, recusandae quia aliquam modi, a animi quod, officia dolore est sed? Nemo voluptas explicabo porro ullam. Perferendis quisquam officiis optio illo quo, sunt inventore soluta alias illum exercitationem maiores atque modi minus, labore veniam, placeat error."
        ],
        [
            "title" => "Judul Tulisan Kedua",
            "slug" => "judul-tulisan-kedua",
            "author" => "Renata Anggun",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti accusamus fuga qui, aut atque accusantium repellendus aliquam quos cum corporis magni ullam aliquid eaque at optio nemo totam maxime nihil laborum inventore. Veniam mollitia nihil corporis distinctio exercitationem omnis natus quidem suscipit maxime porro maiores doloribus quae labore, tempora aut nostrum consequuntur velit nisi consectetur? Officia, eaque nemo porro expedita illum perspiciatis cupiditate commodi nostrum omnis eos, dignissimos iste laborum quidem alias nam in adipisci officiis laudantium delectus at laboriosam fugit? Debitis fuga quibusdam ut, officia eum quod commodi iure laborum in voluptatum consectetur, esse neque, dignissimos eaque laudantium molestias."
        ],
    ];

    public static function all() {
        return collect(self::$blog_posts);
    }

    public static function find($slug) {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
