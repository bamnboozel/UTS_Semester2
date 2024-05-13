<h1>Pendidikan</h1>
<hr>
<a class="create_btn"  href="<?= url("/pendidikan/create")?>">Tambah Data</a>
<table>
    <thead>
        <tr>
            <th>Tahun Lulus</th>
            <th>Jenjang</th>
            <th>Institusi</th>
            <th>No. Ijazah</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($pendidikan as $k => $v) : ?>
            <tr>
                <td><?= $v['tahun_lulus'] ?></td>
                <td><?= $v['jenjang_pendidikan'] ?></td>
                <td><?= $v['institusi'] ?></td>
                <td><?= $v['no_ijazah'] ?></td>
                <td>
                    <a class="detail_btn" href="<?= url("/pendidikan/show?id={$v['id']}") ?>">Detail</a>
                    <a class="delete_btn" href="#" onclick="event.preventDefault(); document.getElementById('delete-form-<?= $v['id'] ?>').submit();">Delete</a>
                    <form id="delete-form-<?= $v['id'] ?>" action="<?= url("/pendidikan/destroy?id={$v['id']}") ?>" method="POST" style="display: none;"></form>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>