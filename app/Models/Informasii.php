<?php

namespace App\Models;

class Informasii
{
    static $web_information = [
        [
            "title" => "judul Informasi Pertama",
            "slug" => "judul-tulisan-pertama",
            "excerpt" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum perspiciatis, nam ratione maiores dolor aliquam nisi accusantium officiis...",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum perspiciatis, nam ratione maiores dolor aliquam nisi accusantium officiis est autem ipsa tempore, ut omnis facere hic voluptatum, sint veniam minus. Itaque quaerat magnam minus id perferendis rerum, eveniet ipsa dolores."
        ],
        [
            "title" => "judul Informasi kedua",
            "slug" => "judul-tulisan-kedua",
            "excerpt" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum perspiciatis, nam ratione maiores dolor aliquam nisi accusantium officiis...",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum perspiciatis, nam ratione maiores dolor aliquam nisi accusantium officiis est autem ipsa tempore, ut omnis facere hic voluptatum, sint veniam minus. Itaque quaerat magnam minus id perferendis rerum, eveniet ipsa dolores."
        ],
        [
            "title" => "judul Informasi ketiga",
            "slug" => "judul-tulisan-ketiga",
            "excerpt" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum perspiciatis, nam ratione maiores dolor aliquam nisi accusantium officiis...",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum perspiciatis, nam ratione maiores dolor aliquam nisi accusantium officiis est autem ipsa tempore, ut omnis facere hic voluptatum, sint veniam minus. Itaque quaerat magnam minus id perferendis rerum, eveniet ipsa dolores."
        ]
    ];

    public static function all() {
        return self::$web_information;
    }
}
