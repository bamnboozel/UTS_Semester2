<h1>Organisasi</h1>
<hr>
<a class="create_btn" href="<?= url("/organisasi/create")?>">Tambah Data</a>
<table>
    <thead>
        <tr>
            <th>Nama</th>
            <th>Tanggal bergabung</th> 
            
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($organisasi as $k => $v) : ?>
            <tr>
                <td><?= $v['nama'] ?></td>
                <td><?= $v['tanggal_bergabung'] ?></td>
                <td>
                    <a class="detail_btn" href="<?= url("/organisasi/show?id={$v['id']}") ?>">Detail</a>
                    <a class="delete_btn" href="#" onclick="event.preventDefault(); document.getElementById('delete-form-<?= $v['id'] ?>').submit();">Delete</a>
                    <form id="delete-form-<?= $v['id'] ?>" action="<?= url("/organisasi/destroy?id={$v['id']}") ?>" method="POST" style="display: none;"></form>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>