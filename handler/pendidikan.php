<?php

function index($db)
{
    require BASE_PROJECT_PATH . "/repository/pendidikan.php";
    $r = getAllPendidikan($db);

    masterView('pendidikan/index', ['pendidikan' => $r]);
}

function show($db)
{
    require BASE_PROJECT_PATH . "/repository/pendidikan.php";
    $r = findPendidikanByID($db, $_GET['id']);

    masterView('pendidikan/show', ['pendidikan' => $r]);
}

function create($db)
{
    require BASE_PROJECT_PATH . "/repository/pendidikanjenjang.php";
    $j = getAlljenjangpendidikan($db);

    masterview('pendidikan/create', ['jenjang' => $j]);
}

function store($db)
{
    require BASE_PROJECT_PATH . "/repository/pendidikan.php";

    $j = newpendidikan($db,$_POST);

    header("location: " . url("/pendidikan"));
    die();
}

function edit($db)
{
    require BASE_PROJECT_PATH . "/repository/pendidikan.php";
    require BASE_PROJECT_PATH . "/repository/pendidikanJenjang.php";
    $j = getAllJenjangPendidikan($db);
    $r = findPendidikanByID($db, $_GET['id']);

    masterView('pendidikan/edit', ['pendidikan' => $r, 'jenjang' => $j]);
}

function update($db)
{
    $id = $_GET['id'];

    require BASE_PROJECT_PATH . "/repository/pendidikan.php";

    $j = updatePendidikanByID($db, $id, $_POST);

    header("Location: " . url("/pendidikan/show?id={$id}"));
    die();
}

function destroy($db)
{
    $id = $_GET['id'];

    require BASE_PROJECT_PATH . "/repository/pendidikan.php";

    $j = deletePendidikan($db, $id);

    header("Location: " . url("/pendidikan"));
    die();
}
