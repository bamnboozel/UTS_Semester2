<form action="<?= url("/organisasi/update?id={$organisasi['id']}") ?>" method="POST">
    <div>
        <label for="nama">Nama</label>
        <input type="text" name="nama" value="<?= $organisasi['nama'] ?>">
    </div>
    <div>
        <label for="tanggal_bergabung">Tanggal bergabung</label>
        <input type="date" name="tanggal_bergabung" value="<?= $organisasi['tanggal_bergabung'] ?>">
    </div>
    <hr>
    <input class="create_btn" type="submit" value="Simpan">
</form>