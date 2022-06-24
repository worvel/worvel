<?php

/* --------------------------------------------->
 * Register custom api routes
 * --------------------------------------------->
 *
 * This file:  is where you can regiter your custom
 * api routes, you can look the first example route
 * to see how to create new custom api route.
 *
 */
return [
    [
        "name" => "/example",
        "id" => "example",
        "method" => "GET",
        "callback" => function () {
            return "This axample of worvel custom api route!";
        },
    ],
];
