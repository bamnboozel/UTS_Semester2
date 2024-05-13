<form action="<?= url("/organisasi") ?>" method="POST">
    <div>
        <label for="nama">Nama</label>
        <input type="text" name="nama">
    </div>
    <div>
        <label for="tanggal_bergabung">Tanggal bergabung</label>
        <input type="date" name="tanggal_bergabung">
    </div>
    <hr>
    <a class="back_btn" href="<?= url('/organisasi') ?>"><- kembali</a>
    <input class="create_btn" type="submit" value="Simpan">
</form>