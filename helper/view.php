<?php

function view($name, $v = [])
{
    if (count($v) > 0) {
        extract($v);
    }
    include VIEW_PATH . $name . ".php";
}

function masterView($inc, $v = [])
{
    view('layout/master', ['inc' => $inc, 'v' => $v]);
}
