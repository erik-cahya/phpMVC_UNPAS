<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Data Pegawai</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="dashboard.php">WMS</a></li>
                    <li class="breadcrumb-item active">Data Pegawai</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="card card-solid">
        <div class="card-body pb-0">

            <!-- Modal Content Start -->
            <div class="card-tools">

                <div class="row">
                    <div class="mt-2">
                        <h2 class="h5">Search Data</h2>
                    </div>

                    <!-- Search Data -->
                    <div class="col-3">
                        <form action="<?= BASEURL; ?>/pegawai/search" method="POST">
                            <div class="input-group">
                                <input type="search" class="form-control" placeholder="Masukkan nama / NIK" name="keyword" id="keyword">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit" id="tombolCari">Search</button>
                                </div>
                            </div>
                        </form>

                    </div>


                    <!-- Tambah Data Pegawai -->
                    <div class="col-8 text-right mb-5">
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" title="Tambah data Baru">
                            <i class="fas fa-user-plus px-2"></i>
                        </button>
                    </div>

                </div>

                <div class="modal fade text-dark" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">

                        <div class="modal-content">
                            <div class="modal-header bg-success">
                                <h5 class="modal-title font-weight-bold" id="exampleModalLabel"><i class="fas fa-user-plus px-2"></i>Submit Pegawai Baru</h5>
                            </div>

                            <div class="modal-body">

                                <!-- Modal Content -->
                                <div class="card-body">
                                    <form action="" method="POST" enctype="multipart/form-data">

                                        <input type="hidden" name="level" value="1">

                                        <!-- NIK -->
                                        <div class="form-group row">
                                            <label for="nik" class="col-sm-2 col-form-label"> NIK </label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="nik" name="nik" placeholder="NIK" required>
                                            </div>
                                        </div>
                                        <!-- End NIK -->

                                        <!-- Nama -->
                                        <div class="form-group row">
                                            <label for="nama-pegawai" class="col-sm-2 col-form-label">Nama</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="nama-pegawai" name="nama_pegawai" placeholder="Nama Pegawai" required>
                                            </div>
                                        </div>
                                        <!-- End Nama -->

                                        <!-- No HP -->
                                        <div class="form-group row">
                                            <label for="no_hp" class="col-sm-2 col-form-label">No HP</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="No HP" required>
                                            </div>
                                        </div>
                                        <!-- End No HP -->

                                        <!-- Jabatan -->
                                        <div class="form-group row">
                                            <label for="id_jabatan" class="col-sm-2 col-form-label">Jabatan</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" id="id_jabatan" name="id_jabatan">

                                                    <?php foreach ($data['jabatan'] as $qry) : ?>
                                                        <option value="<?= $qry["nama_jabatan"] ?>"><?= $qry["nama_jabatan"] ?></option>
                                                    <?php endforeach; ?>

                                                </select>
                                            </div>
                                        </div>
                                        <!-- End Jabatan -->
                                </div>
                                <!-- End Modal Content -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" name="send" class="btn btn-primary">Add Data</button>
                                </div>

                                </form>

                            </div>

                        </div>
                    </div>

                    <!-- End Modal--------------------------------------------------- -->
                </div>
            </div>
            <!-- Akhir Modal Content -->

            <div class="row">

                <!-- Card Content Data Pegawai -->
                <?php foreach ($data['query'] as $qry) : ?>
                    <div class="col-lg-4 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                        <div class="card bg-light d-flex flex-fill">
                            <!-- Nama Jabatan -->
                            <div class="card-header text-muted border-bottom-0 text-capitalize">
                                <?= $qry['nama_jabatan']; ?>
                            </div>
                            <div class="card-body pt-0">
                                <div class="row">
                                    <div class="col-7">
                                        <!-- Nama Pegawai -->
                                        <h2 class="lead font-weight-bold"><?= $qry['nama_pegawai']; ?></h2>
                                        <!-- NIK -->
                                        <p class="text-muted text-sm"><?= $qry['nik']; ?></p>
                                        <ul class="ml-4 mb-0 fa-ul text-muted">

                                            <!-- Address -->
                                            <li class="small mb-3"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> <?= $qry['alamat']; ?></li>
                                            <!-- Phone -->
                                            <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #: <?= $qry['no_hp']; ?></li>

                                        </ul>
                                    </div>
                                    <div class="col-5 text-center">
                                        <!-- Avatar -->
                                        <img src="<?= BASEURL; ?>/dist/img/avatar.png" alt="user-avatar" class="img-circle img-fluid" width="150px">
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer">
                                <div class="text-right">
                                    <!-- Delete  -->
                                    <a href="#" class="btn btn-sm bg-danger" onclick="return confirm('Apakah Anda Ingin Menghapus Data ?');">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                    <!-- View Profile -->
                                    <a href="<?= BASEURL; ?>/pegawai/detail/<?= $qry['nik'] ?>" class="btn btn-sm btn-primary">
                                        <i class="fas fa-user"></i> View Profile
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                <?php endforeach; ?>
                <!-- End Card Content -->
            </div>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</section>
<!-- /.content -->