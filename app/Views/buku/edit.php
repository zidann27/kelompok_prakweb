<!DOCTYPE html>
<html>

<head>
    <title>Edit Buku</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>

<body class="body-bg">
    <div class="container">
        <h2 class="form-title">Edit Buku</h2>
        <form action="/buku/update/<?= $buku['id'] ?>" method="post" class="form">
            <input type="text" name="judul" value="<?= esc($buku['judul']) ?>" class="input" required>
            <input type="text" name="pengarang" value="<?= esc($buku['pengarang']) ?>" class="input" required>
            <input type="text" name="penerbit" value="<?= esc($buku['penerbit']) ?>" class="input" required>
            <input type="number" name="tahun_terbit" value="<?= esc($buku['tahun_terbit']) ?>" class="input" required>
            <button type="submit" class="btn-blue">Update</button>
        </form>
    </div>
</body>

</html>