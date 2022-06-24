<?php

/* --------------------------------------------->
 * Register admin menu page
 * --------------------------------------------->
 *
 * This file is where you can regiter admin menu pages
 * you can look the examples to see how it works.
 *
 */
return [
    "sidebar" => [
        [
            "level" => "top",
            "page_title" => "The Page Title",
            "menu_title" => "Worvel",
            "capability" => "manage_options",
            "menu_slug" => "worvel",
            "callback" => function () {
                echo "Top Level Admin Page!";
            },
            "icon" => "dashicons-plugins-checked",
            "position" => 3,
        ],
        [
            "level" => "sub",
            "parent_slug" => "worvel",
            "page_title" => "The Sub Page Title",
            "menu_title" => "Worvel Sub",
            "capability" => "manage_options",
            "menu_slug" => "worvel-submenu",
            "callback" => function () {
                echo "Sub Level Admin Page!";
            },
            "position" => null,
        ],
    ],
    "adminbar" => [
        [
            "id" => "menu-id",
            "parent" => null,
            "group" => null,
            "title" => "Menu Title", //you can use img tag with image link. it will show the image icon Instead of the title.
            "href" => admin_url("admin.php?page=custom-page"),
            "meta" => [
                "title" => __("Menu Title", "textdomain"), //This title will show on hover
            ],
        ],
    ],
];
