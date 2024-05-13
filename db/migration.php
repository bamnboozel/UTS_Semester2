<?php

function createDB()
{
    $conn = mysqli_connect("localhost", "root", "", null, 3306);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Create database
    $sql = "CREATE DATABASE IF NOT EXISTS latihanweb CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;";
    if (mysqli_query($conn, $sql)) {
        echo "Database created successfully" . PHP_EOL;
    } else {
        echo "Error creating database: " . mysqli_error($conn) . PHP_EOL;
    }

    mysqli_close($conn);
}

function dbCOn()
{
    $db = require_once "conn.php";
    if (!$db) {
        die("Connection failed: " . mysqli_connect_error());
    }

    return $db;
}

function createProfile($db)
{
    mysqli_query($db, "DROP TABLE IF EXISTS `profile`;");
    $sql = <<<SQL
    CREATE TABLE `profile` (
        `id` bigint unsigned NOT NULL AUTO_INCREMENT,
        `nama` varchar(255) NOT NULL,
        `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
        `tanggal_lahir` date NOT NULL,
        `created_at` timestamp NULL DEFAULT NULL,
        `updated_at` timestamp NULL DEFAULT NULL,
        PRIMARY KEY (`id`)
    ) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
    SQL;

    if (mysqli_query($db, $sql)) {
        echo "Table profile created successfully" . PHP_EOL;
    } else {
        echo "Error creating table profile: " . mysqli_error($db) . PHP_EOL;
    }
}

function createPendidikanJenjang($db)
{
    mysqli_query($db, "DROP TABLE IF EXISTS `pendidikan_jenjang`;");
    $sql = <<<SQL
    CREATE TABLE `pendidikan_jenjang` (
        `id` bigint unsigned NOT NULL AUTO_INCREMENT,
        `nama` varchar(255) DEFAULT NULL,
        `created_at` timestamp NULL DEFAULT NULL,
        `updated_at` timestamp NULL DEFAULT NULL,
        PRIMARY KEY (`id`)
    ) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
    SQL;

    if (mysqli_query($db, $sql)) {
        echo "Table pendidikan_jenjang created successfully" . PHP_EOL;
    } else {
        echo "Error creating table pendidikan_jenjang: " . mysqli_error($db) . PHP_EOL;
    }
}


function createPendidikan($db)
{
    mysqli_query($db, "DROP TABLE IF EXISTS `pendidikan`;");
    $sql = <<<SQL
    CREATE TABLE `pendidikan` (
        `id` bigint unsigned NOT NULL AUTO_INCREMENT,
        `jenjang` bigint unsigned NOT NULL,
        `institusi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
        `tahun_lulus` year DEFAULT NULL,
        `no_ijazah` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
        `created_at` timestamp NULL DEFAULT NULL,
        `updated_at` timestamp NULL DEFAULT NULL,
        PRIMARY KEY (`id`),
        KEY `jenjang` (`jenjang`),
        CONSTRAINT `pendidikan_ibfk_1` FOREIGN KEY (`jenjang`) REFERENCES `pendidikan_jenjang` (`id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
    SQL;

    if (mysqli_query($db, $sql)) {
        echo "Table pendidikan created successfully" . PHP_EOL;
    } else {
        echo "Error creating table pendidikan: " . mysqli_error($db)  . PHP_EOL;
    }
}

function createorganisasi($db)
{
    mysqli_query($db, "DROP TABLE IF EXISTS `organisasi`;");
    $sql = <<<SQL
    CREATE TABLE `organisasi` (
        `id` bigint unsigned NOT NULL AUTO_INCREMENT,
        `nama` varchar(255)  NOT NULL,
        `tanggal_bergabung` date DEFAULT NULL,
        `created_at` timestamp NULL DEFAULT NULL,
        `updated_at` timestamp NULL DEFAULT NULL,
        PRIMARY KEY (`id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
    SQL;

    if (mysqli_query($db, $sql)) {
        echo "Table pendidikan created successfully" . PHP_EOL;
    } else {
        echo "Error creating table pendidikan: " . mysqli_error($db)  . PHP_EOL;
    }
}

createDB();
$db = dbCOn();
createProfile($db);
//createPendidikanJenjang($db);
createPendidikan($db);
createorganisasi($db);