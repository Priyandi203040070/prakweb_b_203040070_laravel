<?php

namespace App\Models;


class Post 
{
    private static $blog_posts = [
    [
        "tittle" => "Judul Posts Pertama",
        "slug" => "judu;-post-pertama",
        "author" => "Priyandi Zembar Azizi",
        "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ea consequuntur dolorem, rerum mollitia culpa maxime! Modi quas neque cumque quaerat aliquid molestiae repudiandae esse at animi et architecto distinctio nesciunt facere reiciendis ut alias minima, magni eaque, placeat saepe. Odio voluptas illum architecto similique facilis at deserunt autem et unde id. Nemo exercitationem doloremque repudiandae quibusdam ut, autem ea eius. Possimus aliquid libero animi? Eaque reprehenderit sequi non quas est maxime aliquam quia veritatis iste nisi neque aliquid, porro eos veniam odio impedit velit odit, quos nulla. Quidem, ut alias, soluta dolor beatae autem aperiam repellendus eveniet perferendis ex deleniti?"
    ],
    [
        "tittle" => "Judul Posts Kedua",
        "slug" => "judul-post-kedua",
        "author" => "Hisyam Azmi",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi autem quae explicabo aliquam? Recusandae similique dolorem facilis neque non totam vel, tempore praesentium iste. Illo perferendis, nostrum dicta culpa tempora facilis atque rerum sint perspiciatis voluptatem odit quis est eveniet cum, non tempore autem vero quasi? Quam eum explicabo praesentium eos, in tempora doloremque facilis accusantium accusamus eaque sed aperiam hic fuga excepturi ullam ut amet maiores dolorem consequatur cumque."
    ]
    ];

    public static function all() 
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        // $post = [];
        // foreach ($posts as $p) {
        //     if($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);
    }

}
