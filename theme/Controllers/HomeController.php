<?php

namespace Theme\Controllers;

class HomeController
{
    public function index()
    {
        $posts = new \WP_Query([
            "post_type" => "post",
            "posts_per_page" => 10,
        ]);
        return view("pages.home", ["posts" => $posts]);
    }
}
