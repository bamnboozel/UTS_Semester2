<?php

function index($db)
{
    require BASE_PROJECT_PATH . "/repository/organisasi.php";
    $r = getAllorganisasi($db);

    masterView('organisasi/index',['organisasi' => $r]); 
}

function create($db)
{

    masterView('organisasi/create'); 
}
function store($db)
{
    require BASE_PROJECT_PATH . "/repository/organisasi.php";

    $j = neworganisasi($db,$_POST);

    header("location: " . url("/organisasi"));
    die();
}
function show($db)
{
    require BASE_PROJECT_PATH . "/repository/organisasi.php";
    $r = findorganisasiByID($db, $_GET['id']);

    masterView('organisasi/show', ['organisasi' => $r]);
}
function edit($db)
{
    require BASE_PROJECT_PATH . "/repository/organisasi.php";
    $r = findorganisasiByID($db, $_GET['id']);

    masterView('organisasi/edit', ['organisasi' => $r]);
}
function update($db)
{
    $id = $_GET['id'];

    require BASE_PROJECT_PATH . "/repository/organisasi.php";

    $j = updateorganisasiByID($db, $id, $_POST);

    header("Location: " . url("/organisasi/show?id={$id}"));
    die();
}
function destroy($db)
{
    $id = $_GET['id'];

    require BASE_PROJECT_PATH . "/repository/organisasi.php";

    $j = deleteorganisasi($db, $id);

    header("Location: " . url("/organisasi"));
    die();
}