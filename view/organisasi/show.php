<div class="detail-card">
    <h1>Detail Organisasi</h1>

    <p><strong>Nama:</strong> <?= $organisasi['nama'] ?></p>
    <p><strong>Tanggal Bergabung:</strong> <?= $organisasi['tanggal_bergabung'] ?></p>
    <p><strong>Created At:</strong> <?= $organisasi['created_at'] ?></p>
    <p><strong>Last Update:</strong> <?= $organisasi['updated_at'] ?></p>

    <div class="actions">
        <a class="back_btn" href="<?= url('/organisasi') ?>">&larr; kembali</a>
        <a class="edit_btn" href="<?= url("/organisasi/edit?id={$organisasi['id']}") ?>">Edit</a>
    </div>
</div>
