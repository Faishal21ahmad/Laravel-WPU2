<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Faishalbahy Ahmad Fathuni",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt doloribus quos quaerat sunt? Consectetur, qui unde. Laudantium ipsa in facilis, error, earum nesciunt nobis alias nemo, non expedita aperiam quo."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Ahmad Fathuni",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam assumenda sit sunt totam voluptate praesentium dolorum, odio adipisci quos eligendi laborum vero aliquid! Itaque beatae perspiciatis eveniet minima velit aliquid inventore eum atque quia incidunt illum cupiditate nostrum eligendi dolorem reprehenderit, sequi exercitationem ea, modi quisquam illo nobis et. Minus in eaque deleniti ad perferendis ratione ab ducimus aspernatur repellat consequuntur debitis, veniam quaerat possimus quis, provident excepturi, molestias suscipit id. Provident a suscipit minus et earum pariatur accusantium nam laborum! Possimus totam, dolor officiis laudantium ducimus doloribus recusandae adipisci maiores similique quod ex exercitationem! Itaque delectus accusantium quibusdam molestias."
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
        //     if ($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }
        return $posts->firstWhere('slug', $slug);
    }
}
