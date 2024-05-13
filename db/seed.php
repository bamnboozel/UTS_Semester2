<?php

function dbCOn()
{
    $db = require_once "conn.php";
    if (!$db) {
        die("Connection failed: " . mysqli_connect_error());
    }

    return $db;
}

function seedProfile($db)
{
    $sql = <<<SQL
    INSERT INTO `profile` VALUES (1,'narindra','Laki-laki','2005-06-10',NOW(),NOW());
    SQL;

    if (mysqli_query($db, $sql)) {
        echo "Seeding pendidikan_jenjang success" . PHP_EOL;
    } else {
        echo "Error seeding pendidikan_jenjang : " . mysqli_error($db)  . PHP_EOL;
    }
}

function seedPendidikanJenjang($db)
{
    $sql = <<<SQL
    INSERT INTO `pendidikan_jenjang` VALUES 
    (1,'SD',NOW(),NOW()),
    (2,'SMP',NOW(),NOW()),
    (3,'SMA',NOW(),NOW()),
    (4,'SMK',NOW(),NOW()),
    (5,'D1',NOW(),NOW()),
    (6,'D2',NOW(),NOW()),
    (7,'D3',NOW(),NOW()),
    (8,'D4',NOW(),NOW()),
    (9,'S1',NOW(),NOW()),
    (10,'S2',NOW(),NOW()),
    (11,'S3',NOW(),NOW());
    SQL;

    if (mysqli_query($db, $sql)) {
        echo "Seeding pendidikan_jenjang success" . PHP_EOL;
    } else {
        echo "Error seeding pendidikan_jenjang : " . mysqli_error($db)  . PHP_EOL;
    }
}


$db = dbCOn();
//seedPendidikanJenjang($db);
seedProfile($db);
