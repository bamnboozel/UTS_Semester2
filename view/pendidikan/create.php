<form action="<?= url("/pendidikan") ?>" method="POST">
    <div>
        <label for="jenjang_pendidikan">Jenjang Pendidikan</label>
        <select name="jenjang_pendidikan_id">
            <?php foreach ($jenjang as $key => $j) : ?>
                <option <?= ($key == 0 ? 'selected' : '') ?> value="<?= $j['id'] ?>">
                    <?= $j['nama'] ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>
    <div>
        <label for="institusi">Institusi</label>
        <input type="text" name="institusi">
    </div>
    <div>
        <label for="tahun_lulus">Tahun Lulus</label>
        <input type="text" name="tahun_lulus">
    </div>
    <div>
        <label for="no_ijazah">No. Ijazah</label>
        <input type="text" name="no_ijazah" >
    </div>
    <hr>
    <a class="back_btn" href="<?= url('/pendidikan') ?>"><- kembali</a>
    <input class="create_btn" type="submit" value="Simpan">
</form>