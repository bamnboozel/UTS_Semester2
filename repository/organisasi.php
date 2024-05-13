<?php


function getAllorganisasi($db)
{
    $sql = <<<SQL
    SELECT *
    FROM organisasi
    ORDER BY id DESC;
    SQL;

    $result =  mysqli_query($db, $sql);

    $data = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }

    return $data;
}
function neworganisasi($db, $data){
    
    $sql = <<<SQL
    INSERT INTO organisasi (
        nama,
        tanggal_bergabung,
        created_at,
        updated_at
    )
    VALUES (
        '{$data['nama']}',
        '{$data['tanggal_bergabung']}',
        created_at = NOW(),
        updated_at = NOW()
    )
    SQL;

    if (mysqli_query($db, $sql)) {
        return mysqli_insert_id($db);
    } else {
        return null;
    }

}
function findorganisasiByID($db, $id)
{
    $sql = <<<SQL
    SELECT *
    FROM organisasi
    WHERE id = $id
    LIMIT 1;
    SQL;

    $result =  mysqli_query($db, $sql);

    if (mysqli_num_rows($result) == 0) {
        return null;
    }

    return mysqli_fetch_assoc($result);
}
function updateorganisasiByID($db, $id, $data)
{
    $sql = <<<SQL
    UPDATE organisasi
    SET 
        nama = '{$data['nama']}',
        tanggal_bergabung = '{$data['tanggal_bergabung']}',
        updated_at = NOW()
    WHERE id = $id;
    SQL;

    if (mysqli_query($db, $sql)) {
        return $id;
    } else {
        return null;
    }
}
function deleteorganisasi($db, $id)
{
    $sql = <<<SQL
    DELETE FROM organisasi WHERE id = $id;
    SQL;

    if (mysqli_query($db, $sql)) {
        return true;
    } else {
        return false;
    }
}

