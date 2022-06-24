<?php

/* --------------------------------------------->
 * Register new taxonomy
 * --------------------------------------------->
 *
 * This file: is where you can regiter new taxonomies
 * you can look the first example taxonomy to see how
 * create new taxonomy
 *
 */
return [
    "example" => [
        "object_type" => ["post"],
        "args" => [
            "hierarchical" => true,
            "labels" => [
                "name" => _x("examples", "examples"),
                "singular_name" => _x("example", "example"),
                "search_items" => __("Search examples"),
                "all_items" => __("All examples"),
                "parent_item" => __("Parent example"),
                "parent_item_colon" => __("Parent example:"),
                "edit_item" => __("Edit example"),
                "update_item" => __("Update example"),
                "add_new_item" => __("Add New example"),
                "new_item_name" => __("New example"),
                "menu_name" => __("examples"),
            ],
            "show_ui" => true,
            "show_in_rest" => true,
            "rewrite" => [
                "slug" => "example",
                "with_front" => false,
            ],
        ],
    ],
];
