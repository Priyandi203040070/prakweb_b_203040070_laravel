<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "tittle" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "tittle" => "About",
        "name" => "Priyandi Zembar Azizi",
        "email" => "priyandi.zembarazizi@gmail.com",
        "image" => "gambar.jpg"
    ]);
});


Route::get('/blog', function () {
    $blog_posts = [
        [
            "tittle" => "Judul Posts Pertama",
            "slug" => "judu;-post-pertama",
            "author" => "Priyandi Zembar Azizi",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ea consequuntur dolorem, rerum mollitia culpa maxime! Modi quas neque cumque quaerat aliquid molestiae repudiandae esse at animi et architecto distinctio nesciunt facere reiciendis ut alias minima, magni eaque, placeat saepe. Odio voluptas illum architecto similique facilis at deserunt autem et unde id. Nemo exercitationem doloremque repudiandae quibusdam ut, autem ea eius. Possimus aliquid libero animi? Eaque reprehenderit sequi non quas est maxime aliquam quia veritatis iste nisi neque aliquid, porro eos veniam odio impedit velit odit, quos nulla. Quidem, ut alias, soluta dolor beatae autem aperiam repellendus eveniet perferendis ex deleniti?"
        ],
        [
            "tittle" => "Judul Posts Pertama",
            "slug" => "judu;-post-kedua",
            "author" => "Hisyam Azmi",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi autem quae explicabo aliquam? Recusandae similique dolorem facilis neque non totam vel, tempore praesentium iste. Illo perferendis, nostrum dicta culpa tempora facilis atque rerum sint perspiciatis voluptatem odit quis est eveniet cum, non tempore autem vero quasi? Quam eum explicabo praesentium eos, in tempora doloremque facilis accusantium accusamus eaque sed aperiam hic fuga excepturi ullam ut amet maiores dolorem consequatur cumque."
        ],
        ];
    
    return view('posts', [
        "tittle" => "Posts",
        "posts" => $blog_posts
    ]);
});

// halaman single posts
Route::get('posts/{slug}', function($slug) {
    $blog_posts = [
        [
            "tittle" => "Judul Posts Pertama",
            "slug" => "judu;-post-pertama",
            "author" => "Priyandi Zembar Azizi",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ea consequuntur dolorem, rerum mollitia culpa maxime! Modi quas neque cumque quaerat aliquid molestiae repudiandae esse at animi et architecto distinctio nesciunt facere reiciendis ut alias minima, magni eaque, placeat saepe. Odio voluptas illum architecto similique facilis at deserunt autem et unde id. Nemo exercitationem doloremque repudiandae quibusdam ut, autem ea eius. Possimus aliquid libero animi? Eaque reprehenderit sequi non quas est maxime aliquam quia veritatis iste nisi neque aliquid, porro eos veniam odio impedit velit odit, quos nulla. Quidem, ut alias, soluta dolor beatae autem aperiam repellendus eveniet perferendis ex deleniti?"
        ],
        [
            "tittle" => "Judul Posts Pertama",
            "slug" => "judu;-post-kedua",
            "author" => "Hisyam Azmi",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi autem quae explicabo aliquam? Recusandae similique dolorem facilis neque non totam vel, tempore praesentium iste. Illo perferendis, nostrum dicta culpa tempora facilis atque rerum sint perspiciatis voluptatem odit quis est eveniet cum, non tempore autem vero quasi? Quam eum explicabo praesentium eos, in tempora doloremque facilis accusantium accusamus eaque sed aperiam hic fuga excepturi ullam ut amet maiores dolorem consequatur cumque."
        ],
        ];
        
        $new_post = [];
        foreach ($blog_posts as $post) {
            if($post["slug"] === $slug) {
                $new_post = $post;
            }
        }
    return view('post', [
        "tittle" => "Single Post",
        "post" => $new_post
    ]);
} );