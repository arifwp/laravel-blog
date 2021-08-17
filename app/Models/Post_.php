<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            "judul" => "Rawayana Memakan Apel",
            "slug" => "rawayana-memakan-apel",
            "author" => "Dicky Pras",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus repudiandae, quia similique voluptatibus minima repellendus totam eligendi exercitationem recusandae excepturi aspernatur dicta sed incidunt, cupiditate, debitis sunt alias voluptas animi maiores. Laudantium ipsum aliquid qui, ad provident soluta ipsam voluptates corporis corrupti accusantium nisi id, sed commodi. Exercitationem esse tenetur deserunt est deleniti quidem tempora magni vel quaerat molestiae maiores aut quo, qui animi dolore quibusdam nemo excepturi sint illum recusandae assumenda? Dicta laborum dolore possimus amet eaque et magnam."
        ],
        [
            "judul" => "Sinta Mencari Cinta",
            "slug" => "sinta-mencari-cinta",
            "author" => "Johny Mulyadi",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus repudiandae, quia similique voluptatibus minima repellendus totam eligendi exercitationem recusandae excepturi aspernatur dicta sed incidunt, cupiditate, debitis sunt alias voluptas animi maiores. Laudantium ipsum aliquid qui, ad provident soluta ipsam voluptates corporis corrupti accusantium nisi id, sed commodi. Exercitationem esse tenetur deserunt est deleniti quidem tempora magni vel quaerat molestiae maiores aut quo, qui animi dolore quibusdam nemo excepturi sint illum recusandae assumenda? Dicta laborum dolore possimus amet eaque et magnam."
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
