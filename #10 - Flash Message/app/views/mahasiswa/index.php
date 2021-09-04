<div class="container mt-5">
    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">

            <button type="button" class="btn btn-primary mb-4" data-toggle="modal" data-target="#formModal">
                Tambah Data
            </button>

            <h3>Daftar Mahasiswa</h3>
            <ul class="list-group">
                <?php foreach ($data['mhs'] as $mhs) : ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <?= $mhs["nama"]; ?>
                        <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge badge-primary ">Detail</a>
                    </li>
                <?php endforeach; ?>
            </ul>

            <!-- Modal -->
            <div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="judulModal">Tambah Data Mahasiswa</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <!-- action : akan diarahkan ke method tambah yang dibuat di : controller/mahasiswa -->
                            <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="POST">

                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" class="form-control" id="nama" name="nama">
                                </div>

                                <div class="form-group">
                                    <label for="nim">NIM</label>
                                    <input type="number" class="form-control" id="nim" name="nim">
                                </div>

                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email">Email
                                </div>

                                <div class="form-group">
                                    <label for="jurusan">Jurusan</label>
                                    <select class="form-control" id="jurusan" name="jurusan">
                                        <option value="Sistem Informasi">Sistem Informasi</option>
                                        <option value="Sistem Komputer">Sistem Komputer</option>
                                        <option value="Teknik Komputer">Teknik Komputer</option>
                                        <option value="Teknik Jaringan">Teknik Jaringan</option>
                                        <option value="Teknik Pemrograman">Teknik Pemrograman</option>
                                    </select>
                                </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Tambah Data</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

</div>