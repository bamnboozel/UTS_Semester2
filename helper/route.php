<?php

function registerRoute($path)
{
    $routesMap = [
        "GET" => [],
        "POST" => [],
    ];

    $routes = require $path;

    foreach ($routes as $k => $v) {
        $f = explode(" ", $v[0]);
        $s = explode("@", $v[1]);

        $routesMap[$f[0]][$f[1]] = ['file' => $s[0], 'func' => $s[1]];
    }



    return $routesMap;
}
