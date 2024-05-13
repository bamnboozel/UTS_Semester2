<?php

function url($url)
{
    if ($url == '/') {
        $url = '';
    }
    return BASE_URL . $url;
}
