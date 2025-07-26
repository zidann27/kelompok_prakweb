<!DOCTYPE html>
<html>

<head>
    <title>Tambah Buku</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>

<body class="body-bg">
    <div class="container">
        <h2 class="form-title">Tambah Buku</h2>
        <form action="/buku/store" method="post" class="form">
            <input type="text" name="judul" placeholder="Judul Buku" class="input" required>
            <input type="text" name="pengarang" placeholder="Pengarang" class="input" required>
            <input type="text" name="penerbit" placeholder="Penerbit" class="input" required>
            <input type="number" name="tahun_terbit" placeholder="Tahun Terbit" class="input" required>
            <button type="submit" class="btn-green">Simpan</button>
        </form>
    </div>
</body>

</html>