<?php

/* --------------------------------------------->
 * Register new post types
 * --------------------------------------------->
 *
 * This file is where you can regiter new post types
 * you can look the first example post type to see
 * how to create new post type
 *
 *
 */
return [
    "example" => [
        "label" => "Examples",
        "labels" => [
            "name" => __("Examples"),
            "singular_name" => __("Example"),
        ],
        "public" => true,
        "show_ui" => true,
        "has_archive" => true,
        "rewrite" => ["slug" => "sxamples"],
        "show_in_rest" => true,
    ],
];
