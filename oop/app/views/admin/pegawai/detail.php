<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Detail Pegawai</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?= BASEURL; ?>">WMS</a></li>
                    <li class="breadcrumb-item active">Detail Pegawai</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<!-- Main Content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">

                <!-- Profile Image -->
                <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle " src="<?= BASEURL; ?>/dist/img/avatar.png" alt="User profile picture">
                        </div>

                        <h3 class="profile-username text-center font-weight-bold"><?= $data['query']['nama_pegawai']; ?></h3>

                        <p class="text-muted text-center"><?= $data['query']['nama_jabatan']; ?></p>

                        <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                                <b>NIK</b> <a class="float-right"><?= $data['query']['nik']; ?></a>
                            </li>
                            <li class="list-group-item">
                                <b>Phone</b> <a class="float-right"><?= $data['query']['no_hp']; ?></a>
                            </li>
                            <li class="list-group-item">
                                <b>E-Mail</b> <a class="float-right"><?= $data['query']['email']; ?></a>
                            </li>
                        </ul>

                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

                <!-- About Me Box -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">About Me</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <strong><i class="fas fa-book mr-1"></i> Lulusan </strong>

                        <p class="text-muted">
                            <?= $data['query']['lulusan']; ?>
                        </p>

                        <hr>

                        <strong><i class="fas fa-map-marker-alt mr-1"></i> Address</strong>

                        <p class="text-muted"><?= $data['query']['alamat']; ?></p>

                        <hr>

                        <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

                        <p class="text-muted">
                            <?= $data['query']['skill']; ?>
                        </p>

                        <hr>

                        <strong><i class="far fa-file-alt mr-1"></i> Social Media</strong>
                        <p class="ml-4">
                            <a href="<?= $data['query']['fb_links']; ?>" class="text-muted " style="font-size:30px;"><i class="fab fa-facebook fs-1"></i></a>
                            <a href="<?= $data['query']['ig_links']; ?>" class="text-muted pl-1" style="font-size:30px;"><i class="fab fa-instagram-square"></i></a>
                            <a href="<?= $data['query']['linked_links']; ?>" class="text-muted pl-1" style="font-size:30px;"><i class="fab fa-linkedin"></i></a>
                        </p>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header p-2">
                        <ul class="nav nav-pills">
                            <li class="nav-item"><a class="nav-link active" href="#biodata" data-toggle="tab">Biodata</a></li>
                            <li class="nav-item"><a class="nav-link" href="#change" data-toggle="tab">Ubah Biodata</a></li>
                            <li class="nav-item"><a class="nav-link" href="#account" data-toggle="tab">Account Settings</a></li>
                            <li class="nav-item"><a class="nav-link" href="#addAccount" data-toggle="tab">Add Account</a></li>
                        </ul>
                    </div><!-- /.card-header -->

                    <div class="card-body">
                        <div class="tab-content">


                            <!-- ******** Biodata -->
                            <div class="active tab-pane" id="biodata">

                                <!-- Nama -->
                                <div class="form-group row">
                                    <label for="inputName" class="col-sm-2 col-form-label">Nama</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="inputName" placeholder="<?= $data['query']['nama_pegawai']; ?>" disabled>
                                    </div>
                                </div>
                                <!-- End Nama -->

                                <!-- NIK -->
                                <div class="form-group row">
                                    <label for="inputEmail" class="col-sm-2 col-form-label">NIK</label>
                                    <div class="col">
                                        <input type="email" class="col-11 form-control" id="inputEmail" placeholder="<?= $data['query']['nik']; ?>" disabled>
                                    </div>

                                    <!-- End NIK -->

                                    <!-- No Telepon -->

                                    <label for="inputSkills" class="col-1 col-form-label">No Telepon</label>
                                    <div class="col">
                                        <input type="text" class="form-control" id="inputSkills" placeholder="<?= $data['query']['no_hp']; ?>" disabled>
                                    </div>
                                </div>
                                <!-- End No Telepon -->

                                <!-- Jabatan -->
                                <div class="form-group row">
                                    <label for="inputEmail" class="col-sm-2 col-form-label">Jabatan</label>
                                    <div class="col">
                                        <input type="email" class="col-11 form-control" id="inputEmail" placeholder="<?= $data['query']['nama_jabatan']; ?>" disabled>
                                    </div>

                                    <!-- End Jabatan -->

                                    <!-- Lulusan -->

                                    <label for="inputSkills" class="col-1 col-form-label">Lulusan</label>
                                    <div class="col">
                                        <input type="text" class="form-control" id="inputSkills" placeholder="<?= $data['query']['lulusan']; ?>" disabled>
                                    </div>
                                </div>
                                <!-- End Lulusan -->

                                <!-- Email -->
                                <div class="form-group row">
                                    <label for="inputSkills" class="col-sm-2 col-form-label">E-Mail</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputSkills" placeholder="<?= $data['query']['email']; ?>" disabled>
                                    </div>
                                </div>
                                <!-- End Email -->

                                <!-- Skills -->
                                <div class="form-group row">
                                    <label for="inputExperience" class="col-sm-2 col-form-label">Skills</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" id="inputExperience" placeholder="<?= $data['query']['skill']; ?>" disabled></textarea>
                                    </div>
                                </div>
                                <!-- End Skills -->

                                <!-- Alamat -->
                                <div class="form-group row">
                                    <label for="inputExperience" class="col-sm-2 col-form-label">Alamat</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" id="inputExperience" placeholder="<?= $data['query']['alamat']; ?>" disabled></textarea>
                                    </div>
                                </div>
                                <!-- End Alamat -->

                            </div>
                            <!-- End Biodata -->


                            <!-- ****** Ubah Biodata ****** -->
                            <div class="tab-pane" id="change">

                                <form class="form-horizontal" method="POST" enctype="multipart/form-data">

                                    <!-- Gambar Lama -->
                                    <input type="hidden" name="gambarLama" value="<?= $data['query']['gambar']; ?>">
                                    <input type="hidden" name="level" value="2">
                                    <!-- End Gambar Lama -->

                                    <!-- Nama -->
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Nama</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputName" value="<?= $data['query']['nama_pegawai']; ?>" name="nama_pegawai">
                                        </div>
                                    </div>
                                    <!-- End Nama -->

                                    <!-- NIK -->
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">NIK</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputName" value="<?= $data['query']['nik']; ?>" name="nik">
                                        </div>
                                    </div>
                                    <!-- End NIK -->

                                    <!-- Jenis Kelamin -->
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputName" value="<?= $data['query']['jenis_kelamin']; ?>" name="jenis_kelamin">
                                        </div>
                                    </div>
                                    <!-- End Jenis Kelamin -->

                                    <!-- No Telepon -->
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">No Telepon</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputName" value="<?= $data['query']['no_hp']; ?>" name="no_hp">
                                        </div>
                                    </div>
                                    <!-- End No Telepon -->

                                    <!-- Jabatan -->
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Jabatan</label>
                                        <div class="col-sm-10">
                                            <select class="form-control" id="id_jabatan" name="id_jabatan">
                                                <?php foreach ($dataJabatan as $jbt) : ?>
                                                    <option value="<?= $jbt["id_jabatan"]; ?>"><?= $jbt["nama_jabatan"]; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- End Jabatan -->

                                    <!-- Lulusan -->
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Lulusan</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputName" value="<?= $data['query']['lulusan']; ?>" name="lulusan">
                                        </div>
                                    </div>
                                    <!-- End Lulusan -->

                                    <!-- E-Mail -->
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">E-Mail</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputName" value="<?= $data['query']['email']; ?>" name="email">
                                        </div>
                                    </div>
                                    <!-- End E-Mail -->


                                    <!-- Tempat Lahir -->
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Tempat Lahir</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputName" value="<?= $data['query']['tempat_lahir']; ?>" name="tempat_lahir">
                                        </div>
                                    </div>
                                    <!-- End Tempat Lahir -->


                                    <!-- Tanggal Lahir -->
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                        <div class="col-sm-10">
                                            <input type="date" class="form-control" id="inputName" value="<?= $data['query']['tanggal_lahir']; ?>" name="tanggal_lahir">
                                        </div>
                                    </div>
                                    <!-- End Tanggal Lahir -->



                                    <!-- Skills -->
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Skills</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputName" value="<?= $data['query']['skill']; ?>" name="skill">
                                        </div>
                                    </div>
                                    <!-- End Skills -->

                                    <!-- Alamat -->
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Alamat</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputName" value="<?= $data['query']['alamat']; ?>" name="alamat">
                                        </div>
                                    </div>
                                    <!-- End Alamat -->

                                    <!-- Link Facebook -->
                                    <div class="form-group row">
                                        <label for="linkfb" class="col-sm-2 col-form-label">Link Facebook</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="linkfb" value="<?= $data['query']['fb_links']; ?>" name="fb_links">
                                        </div>
                                    </div>
                                    <!-- End Link Facebook -->

                                    <!-- Link Instagram -->
                                    <div class="form-group row">
                                        <label for="iglink" class="col-sm-2 col-form-label">Link Instagram</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="iglink" value="<?= $data['query']['ig_links']; ?>" name="ig_links">
                                        </div>
                                    </div>
                                    <!-- End Link Instagram -->

                                    <!-- Link Linkedln -->
                                    <div class="form-group row">
                                        <label for="linkedln" class="col-sm-2 col-form-label">Link Linkedln</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="linkedln" value="<?= $data['query']['linked_links']; ?>" name="linked_links">
                                        </div>
                                    </div>
                                    <!-- End Link Linkedln -->

                                    <!-- Upload File -->
                                    <div class="form-group row">
                                        <div class="col-lg-2 col-sm-12">
                                            <label for="image">Change Picture</label>
                                        </div>
                                        <div class="col-lg-5 col-sm-12">
                                            <input type="file" name="gambar" id="image">
                                        </div>
                                    </div>



                                    <div class="form-group row">
                                        <div class="offset-sm-2 col-sm-10">
                                            <button type="submit" class="btn btn-danger" name="save">Save Data</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                            <!-- End Ubah Biodata -->




                            <!-- Account Setting -->
                            <div class="tab-pane" id="account">

                                <form class="form-horizontal" method="POST">

                                    <!-- Pengecekan Account -->
                                    <?php if ($dataAccount == null) {
                                        $username = "Blm ada Data";
                                        $disable = "disabled";

                                        $danger = "
                          <div class='alert alert-danger' role='alert'>
                            Account user ini belum di tambahkan pada database (NULL)
                          </div>";
                                    } else {
                                        $username = $dataAccount["username"];
                                        $password = $dataAccount["password"];
                                    }
                                    ?>

                                    <?= $danger; ?>
                                    <input type="text" name="id_user" value="<?= $dataAccount["id_user"]; ?>" hidden>
                                    <input type="hidden" name="nik" value="<?= $dataAccount["nik"]; ?>">

                                    <div class="form-group row">
                                        <label for="username" class="col-sm-2 col-form-label">Username</label>
                                        <div class="col-sm-10">
                                            <input type="text" id="username" name="username" value="<?= $username ?>" hidden>
                                            <input type="text" class="form-control" value="<?= $username; ?>" disabled>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputEmail" class="col-sm-2 col-form-label">Password</label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" id="inputEmail" name="password" value="<?= $password ?>" <?= $disable; ?>>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <div class="offset-sm-2 col-sm-10">
                                            <button type="submit" class="btn btn-danger" name="account">Submit</button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                    </div>

                                </form>
                            </div>
                            <!-- End Account Setting -->

                            <!-- Add Account -->
                            <div class="tab-pane" id="addAccount">

                                <form class="form-horizontal" method="POST">


                                    <input type="text" name="id_user" hidden>
                                    <input type="hidden" name="nik" value="<?= $dataUser["nik"]; ?>">
                                    <div class="form-group row">
                                        <label for="inputEmail" class="col-sm-2 col-form-label">Username</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputEmail" name="username">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputEmail" class="col-sm-2 col-form-label">Password</label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" id="inputEmail" name="password">
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <div class="offset-sm-2 col-sm-10">
                                            <button type="submit" class="btn btn-danger" name="tambahAccount">Tambah Account</button>
                                        </div>
                                    </div>

                                    <div class="card-body">



                                    </div>

                                </form>
                            </div>
                            <!-- End Add Account -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /. Main Content -->