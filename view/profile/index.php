<div class="profile-container">
    <h1>Ini Profile Saya</h1>
    
    <p><strong>Nama :</strong> <?= $profile['nama'] ?></p>
    <p><strong>Jenis Kelamin :</strong> <?= $profile['jenis_kelamin'] ?></p>
    <p><strong>Tanggal Lahir :</strong> <?= $profile['tanggal_lahir'] ?></p>

    <a class="edit_btn" href="<?= url("/profile/ubah") ?>">Edit Profile</a>
</div>
