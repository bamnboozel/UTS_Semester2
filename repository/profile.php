<?php


function findProfileByID($db, $id)
{
    $sql = <<<SQL
    SELECT 
        id, 
        nama, 
        jenis_kelamin,
        tanggal_lahir
    FROM `profile`
    WHERE id = $id
    LIMIT 1;
    SQL;

    $result =  mysqli_query($db, $sql);

    if (mysqli_num_rows($result) == 0) {
        return null;
    }

    return mysqli_fetch_assoc($result);
}

function updateProfileById($db, $id, $data)
{
    $sql = <<<SQL
    UPDATE `profile`
    SET 
        nama = '{$data['nama']}',
        tanggal_lahir = '{$data['tanggal_lahir']}',
        jenis_kelamin = '{$data['jenis_kelamin']}',
        updated_at = NOW()
    WHERE id = $id;
    SQL;

    if (mysqli_query($db, $sql)) {
        return $id;
    } else {
        return null;
    }
}

