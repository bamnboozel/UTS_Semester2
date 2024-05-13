<form action="<?= url("/pendidikan/update?id={$organisasi['id']}") ?>" method="POST">
    <div>
        <label for="jenjang_pendidikan">Jenjang Pendidikan</label>
        <select name="jenjang_pendidikan">
            <?php foreach ($jenjang as $j) : ?>
                <option <?= ($j['id'] == $pendidikan['jenjang_pendidikan_id'] ? 'selected' : '') ?> value="<?= $j['id'] ?>">
                    <?= $j['nama'] ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>
    <div>
        <label for="institusi">Institusi</label>
        <input type="text" name="institusi" value="<?= $pendidikan['institusi'] ?>">
    </div>
    <div>
        <label for="tahun_lulus">Tahun Lulus</label>
        <input type="text" name="tahun_lulus" value="<?= $pendidikan['tahun_lulus'] ?>">
    </div>
    <div>
        <label for="no_ijazah">No. Ijazah</label>
        <input type="text" name="no_ijazah" value="<?= $pendidikan['no_ijazah'] ?>">
    </div>
    <hr>
    <input class="create_btn" type="submit" value="Simpan">
</form>