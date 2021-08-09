<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "First Post Title",
            "slug" => "first-post",
            "author" => "Alvin Martin",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illo deleniti ullam molestiae voluptatem sunt autem qui obcaecati suscipit quidem labore, cupiditate quasi eaque debitis dicta perferendis quibusdam voluptates? Debitis laudantium accusamus dignissimos quaerat provident aliquam, fugit doloremque fugiat mollitia. Provident sint dolorum velit deleniti aut adipisci corrupti quisquam maiores voluptate tenetur et ex pariatur, nemo autem, temporibus nesciunt a voluptatum sit cum similique fugiat amet, minus expedita possimus! Architecto perferendis, dolores blanditiis error ad doloribus veritatis repellendus accusamus quod enim. Labore ea ab, ipsa culpa similique quisquam molestiae officiis ducimus reiciendis assumenda quae nisi iusto dicta dolor aliquam veniam ad."
        ],
        [
            "title" => "Second Post Title",
            "slug" => "second-post",
            "author" => "Veiros",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta officiis tenetur, earum exercitationem, sed corporis, voluptatem expedita vel ipsa nostrum reprehenderit autem doloremque. Quisquam obcaecati consequuntur, quo blanditiis, veniam sed tempora perferendis, cupiditate reprehenderit illo nihil repudiandae labore! Deleniti inventore eius cumque iure sint ratione perferendis atque voluptatum natus! Sint deserunt ad cum saepe magni dignissimos esse omnis consequuntur voluptatum quidem ipsa tempore fugiat vitae fugit nam impedit rem placeat, cumque voluptas illum, maxime obcaecati voluptate laboriosam. Dignissimos, quos repudiandae."
        ],
        [
            "title" => "Third Post Title",
            "slug" => "third-post",
            "author" => "Cerberus",
            "body" => "dolor sit amet consectetur adipisicing elit. Dicta officiis tenetur, earum exercitationem, sed corporis, voluptatem expedita vel ipsa nostrum reprehenderit autem doloremque. Quisquam obcaecati consequuntur, quo blanditiis, veniam sed tempora perferendis, cupiditate reprehenderit illo nihil repudiandae labore! Deleniti inventore eius cumque iure sint ratione perferendis atque voluptatum natus! Sint deserunt ad cum saepe magni dignissimos esse omnis consequuntur voluptatum quidem ipsa tempore fugiat vitae fugit nam impedit rem placeat, cumque voluptas illum, maxime obcaecati voluptate laboriosam. Dignissimos, quos repudiandae."
        ],
    ];

    public static function all ()
    {
        return collect(self::$blog_posts);
    }

    public static function find ($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
