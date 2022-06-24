<?php

/* --------------------------------------------->
 * Register customizer
 * --------------------------------------------->
 *
 * This file is where you can regiter customizer api
 * you can look the examples to see how it works.
 *
 */
return [
    "panels" => [
        "example_panel" => [
            "title" => "Example Panel",
        ],
    ],
    "sections" => [
        "example_section" => [
            "title" => "Example Section",
            "panel" => "example_panel",
        ],
    ],
    "settings" => [
        "example_setting" => [
            "default" => "the default value!",
        ],
    ],
    "controls" => [
        "example_control" => [
            "label" => "Example label",
            "section" => "example_section",
            "settings" => "example_setting",
        ],
    ],
];
