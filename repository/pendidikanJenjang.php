<?php


function getAllJenjangPendidikan($db)
{
    $sql = <<<SQL
    SELECT 
        id,
        nama
    FROM pendidikan_jenjang
    ORDER BY id ASC;
    SQL;

    $result =  mysqli_query($db, $sql);

    $data = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }

    return $data;
}
