    <h1>Halaman About</h1>

    <img src="<?= BASEURL; ?>/img/avatar.png" alt="">

    <!-- Ambil data yang dikirimkan $data pada controller about -->
    <p>
        Nama : <?= $data['nama']; ?> <br>
        Perkerjaaan : <?= $data['pekerjaan']; ?> <br>
        Umur : <?= $data['umur']; ?>
    </p>