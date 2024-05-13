<?php

function index($db)
{
    require BASE_PROJECT_PATH . "/repository/profile.php";
    $r = findProfileByID($db, 1);

    masterView('profile/index', ['profile' => $r]);
}

function ubah($db)
{
    require BASE_PROJECT_PATH . "/repository/profile.php";
    $r = findProfileByID($db, 1);

    masterView('profile/ubah', ['profile' => $r]);
}

function update($db)
{
    require BASE_PROJECT_PATH . "/repository/profile.php";
    $r = updateProfileById($db, 1, $_POST);

    header("Location: " . url("/profile"));
    die();
}


