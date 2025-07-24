<?= $this->extend('layouts/template') ?>
<?= $this->section('content') ?>

<h2>Tambah Mahasiswa</h2>
<form action="<?= base_url('crud/simpan') ?>" method="post" class="form-input">
    <label>NIM</label>
    <input type="text" name="nim" required>

    <label>Nama</label>
    <input type="text" name="nama" required>

    <label>Prodi</label>
    <input type="text" name="prodi" required>

    <label>Universitas</label>
    <input type="text" name="universitas" required>

    <label>Nomor HP</label>
    <input type="text" name="nomor_handphone" required>

    <input type="submit" value="Simpan" class="btn">
</form>

<?= $this->endSection() ?>