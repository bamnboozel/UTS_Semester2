<h1>ubah data profile</h1>

<form action="<?= url('/profile/update') ?>" method="POST">
    <div>
        <label>Nama</label>
        <input type="text" name="nama" value="<?= $profile['nama'] ?>">
    </div>
    <div>
        <label>Jenis kelamin</label>
        <select name="jenis_kelamin">
            <option <?= $profile['jenis_kelamin'] == "Laki-laki" ? "selected": "" ?> value="laki-laki">laki-laki</option>
            <option <?= $profile['jenis_kelamin'] == "Perempuan" ? "selected": "" ?> value="perempuan">perempuan</option>
        </select>
    </div>
    <div>
        <label>Tanggal lahir</label>
        <input type="date" name="tanggal_lahir" value="<?= $profile['tanggal_lahir'] ?>">
    </div>
    <div>
    <a class="back_btn" href="<?= url('/profile') ?>"><- kembali</a>
        <input class="create_btn" type="submit" value="simpan">
    </div>
</form>

