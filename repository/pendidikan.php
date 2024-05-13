<?php


function getAllPendidikan($db)
{
    $sql = <<<SQL
    SELECT 
        pendidikan.id,
        jenjang AS jenjang_pendidikan_id,
        pendidikan_jenjang.nama AS jenjang_pendidikan,
        institusi,
        tahun_lulus,
        no_ijazah,
        pendidikan.created_at,
        pendidikan.updated_at 
    FROM pendidikan
    JOIN pendidikan_jenjang ON pendidikan_jenjang.id = pendidikan.jenjang
    ORDER BY tahun_lulus DESC;
    SQL;

    $result =  mysqli_query($db, $sql);

    $data = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }

    return $data;
}

function findPendidikanByID($db, $id)
{
    $sql = <<<SQL
    SELECT 
        pendidikan.id,
        jenjang AS jenjang_pendidikan_id,
        pendidikan_jenjang.nama AS jenjang_pendidikan,
        institusi,
        tahun_lulus,
        no_ijazah,
        pendidikan.created_at,
        pendidikan.updated_at 
    FROM pendidikan
    JOIN pendidikan_jenjang ON pendidikan_jenjang.id = pendidikan.jenjang
    WHERE pendidikan.id = $id
    LIMIT 1;
    SQL;

    $result =  mysqli_query($db, $sql);

    if (mysqli_num_rows($result) == 0) {
        return null;
    }

    return mysqli_fetch_assoc($result);
}

function newPendidikan($db, $data)
{
    $sql = <<<SQL
    INSERT INTO pendidikan (
        jenjang,
        institusi,
        tahun_lulus,
        no_ijazah,
        created_at,
        updated_at
    )
    VALUES (
        {$data['jenjang_pendidikan_id']},
        '{$data['institusi']}',
        {$data['tahun_lulus']},
        '{$data['no_ijazah']}',
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


function updatePendidikanByID($db, $id, $data)
{
    $sql = <<<SQL
    UPDATE pendidikan
    SET 
        jenjang = {$data['jenjang_pendidikan']},
        institusi = '{$data['institusi']}',
        tahun_lulus = '{$data['tahun_lulus']}',
        no_ijazah = '{$data['no_ijazah']}',
        updated_at = NOW()
    WHERE id = $id;
    SQL;

    if (mysqli_query($db, $sql)) {
        return $id;
    } else {
        return null;
    }
}

function deletePendidikan($db, $id)
{
    $sql = <<<SQL
    DELETE FROM pendidikan WHERE id = $id;
    SQL;

    if (mysqli_query($db, $sql)) {
        return true;
    } else {
        return false;
    }
}
