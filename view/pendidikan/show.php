<div class="detail-container">
    <h1>Detail Pendidikan</h1>

    <p><strong>Jenjang Pendidikan:</strong> <?= $pendidikan['jenjang_pendidikan'] ?></p>
    <p><strong>Institusi:</strong> <?= $pendidikan['institusi'] ?></p>
    <p><strong>Tahun Lulus:</strong> <?= $pendidikan['tahun_lulus'] ?></p>
    <p><strong>No. Ijazah:</strong> <?= $pendidikan['no_ijazah'] ?></p>
    <p><strong>Created At:</strong> <?= $pendidikan['created_at'] ?></p>
    <p><strong>Last Update:</strong> <?= $pendidikan['updated_at'] ?></p>

    <div class="actions">
        <a class="back_btn" href="<?= url('/pendidikan') ?>">&larr; kembali</a>
        <a class="edit_btn" href="<?= url("/pendidikan/edit?id={$pendidikan['id']}") ?>">Edit</a>
    </div>
</div>
