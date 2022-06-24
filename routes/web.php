<?php

/* --------------------------------------------->
 * Register custom web routes
 * --------------------------------------------->
 *
 * This file: is where you can regiter your custom
 * routes, you can look the first example route to
 * see how to create new custom route.
 *
 */
return [
    [
        "name" => "/example",
        "id" => "example",
        "method" => "GET",
        "callback" => function () {
            return "This an example of worvel custom route!";
        },
    ],
];
