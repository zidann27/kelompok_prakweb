<?= $this->extend('layouts/template') ?>
<?= $this->section('content') ?>

<h2>Edit Mahasiswa</h2>
<form action="<?= base_url('crud/update/' . $mahasiswa['nim']) ?>" method="post" class="form-input">
    <label>NIM</label>
    <input type="text" name="nim_baru" value="<?= $mahasiswa['nim'] ?>" required>

    <label>Nama</label>
    <input type="text" name="nama" value="<?= $mahasiswa['nama'] ?>" required>

    <label>Prodi</label>
    <input type="text" name="prodi" value="<?= $mahasiswa['prodi'] ?>" required>

    <label>Universitas</label>
    <input type="text" name="universitas" value="<?= $mahasiswa['universitas'] ?>" required>

    <label>Nomor HP</label>
    <input type="text" name="nomor_handphone" value="<?= $mahasiswa['nomor_handphone'] ?>" required>

    <input type="submit" value="Update" class="btn">
</form>

<?= $this->endSection() ?>