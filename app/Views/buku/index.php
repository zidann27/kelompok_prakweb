<!DOCTYPE html>
<html>

<head>
    <title>Daftar Buku</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>

<body class="body-bg">
    <div class="container-wide">
        <h1 class="title">Daftar Buku</h1>

        <form action="/buku" method="get" style="margin-bottom: 20px;">
            <input type="text" name="keyword" placeholder="Cari judul buku..." value="<?= esc($keyword ?? '') ?>" />
            <button type="submit">Cari</button>
            <a href="/buku" class="btn-blue" style="margin-left: 10px;">Reset</a>
        </form>

        <a href="/buku/create" class="btn-blue">Tambah Buku</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Judul</th>
                    <th>Pengarang</th>
                    <th>Penerbit</th>
                    <th>Tahun</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($buku)): ?>
                <?php foreach ($buku as $row): ?>
                <tr>
                    <td><?= esc($row['judul']) ?></td>
                    <td><?= esc($row['pengarang']) ?></td>
                    <td><?= esc($row['penerbit']) ?></td>
                    <td><?= esc($row['tahun_terbit']) ?></td>
                    <td>
                        <a href="/buku/edit/<?= $row['id'] ?>" class="text-yellow">Edit</a>
                        <a href="/buku/delete/<?= $row['id'] ?>" onclick="return confirm('Hapus buku ini?')"
                            class="text-red">Hapus</a>
                    </td>
                </tr>
                <?php endforeach ?>
                <?php else: ?>
                <tr>
                    <td colspan="5">Data tidak ditemukan.</td>
                </tr>
                <?php endif ?>
            </tbody>
        </table>
    </div>
</body>

</html>