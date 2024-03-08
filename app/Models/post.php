<?php

namespace App\Models;

class post
{
    private static $blog_posts = [
            [
                "title" => "Judul Post Pertama",
                "slug" => "judul-post-pertama",
                "author" => "Abid Abiyyu Imani",
                "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates numquam, voluptas sunt quam sequi maxime. Cum minima, ullam, aliquid soluta unde beatae dolorum ipsum a deleniti, ipsa autem minus dolor eum delectus ab consectetur voluptas voluptatibus corrupti repudiandae officia? Commodi veritatis, modi veniam ad ullam accusantium ut consectetur facere, ab et molestiae neque blanditiis laborum reprehenderit quas illum unde. Saepe, laboriosam ab. Ex animi ab nam, iste quibusdam cumque mollitia. Repellendus iure veritatis magni dolore, tempora natus commodi dolorum adipisci!"
            ],
            [
                "title" => "Judul Post Kedua",
                "slug" => "judul-post-kedua",
                "author" => "Fariz Fathin Imani",
                "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa cupiditate numquam nostrum eligendi earum, assumenda modi illum perspiciatis fugiat corporis, aliquam laudantium rerum tempora accusamus, minima fugit corrupti repudiandae mollitia. Eligendi quis quam reiciendis! Omnis suscipit officia, molestias temporibus ipsam debitis ad saepe placeat, odit sapiente neque natus velit. Ullam ratione autem possimus eos necessitatibus quod neque cum eaque, commodi unde veniam nobis porro pariatur tempora consectetur recusandae quis labore rerum numquam a cupiditate sit. Sequi ut aspernatur corporis incidunt. Fugit quae labore aliquam dolores unde saepe sunt, tenetur odit et repellat deleniti corporis nulla quaerat reprehenderit repellendus perspiciatis? Laboriosam."
            
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
