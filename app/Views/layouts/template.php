<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Mahasiswa</title>
    <link rel="stylesheet" href="/assets/css/crud.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.4.0/css/all.css">
</head>

<body>
    <header>
        <nav>
            <table>
                <tr>
                    <td>Nama</td>
                    <td>Zidan syarif Hidayat</td>
                </tr>
                <tr>
                    <td>NIM</td>
                    <td>32602300066</td>
                </tr>
            </table>
        </nav>
    </header>

    <main>
        <?= $this->renderSection('content') ?>
    </main>
</body>

</html>