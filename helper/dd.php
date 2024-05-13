<?php

function dd($d)
{
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($d, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
    exit();
}
