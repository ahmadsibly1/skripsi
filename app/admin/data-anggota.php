<?php include('header.php'); ?>
<?php include('../../conf/config.php'); ?>
<?php include('../../conf/rupiah.php'); ?>


<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Navbar -->
    <?php include('navbar.php'); ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-light-primary elevation-4">

      <!-- Sidebar -->
      <?php include('sidebar.php'); ?>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->

      <div class="container-fluid">
        <div class="row mb-2 mt-3">
          <div class="col-sm-12">
            <!-- Main content -->
            <section class="content">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-12">
                    <!-- /.card -->
                    <div class="card">
                      <div class="card-header">
                        <div class="card-title">
                          <div class="d-flex justify-content-center">
                            <h3>Data Anggota</h3>
                          </div>
                        </div>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body ">
                        <button type="button" class="btn btn-info mb-3 " data-toggle="modal" data-target="#modal-lg">
                          Tambah Anggota
                        </button>
                        <div class="table-responsive">
                          <table id=" example1" class="table table-sm table-bordered table-striped" style="font-size: 13px;">
                            <thead>
                              <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>KTP</th>
                                <th>Jenis Kelamin</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>HP</th>
                                <th>Aksi</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php
                              $no = 0;
                              $query = mysqli_query($koneksi, "SELECT * FROM users");
                              while ($anggota = mysqli_fetch_array($query)) {
                                $no++
                              ?>
                                <tr>
                                  <td><?= $no; ?></td>
                                  <td width='13%'><?= $anggota['nama_user']; ?></td>
                                  <td>
                                    <a href="../../conf/img/<?= $anggota['ktp']; ?>">
                                      <img src="../../conf/img/<?= $anggota['ktp']; ?>" alt="" width="60px">
                                    </a>
                                  </td>
                                  <td><?= $anggota['jenis_kelamin']; ?></td>
                                  <td><?= $anggota['tempat_lahir']; ?></td>
                                  <td><?= date('d-m-Y', strtotime($anggota['tanggal_lahir'])); ?></td>
                                  <td><?= $anggota['no_telp']; ?></td>
                                  <td>
                                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-lg<?= $anggota['id_user']; ?>">
                                      <i class="bi bi-eye-fill"></i>
                                    </button>
                                    <!-- modal target -->
                                    <div class="modal fade" id="modal-lg<?= $anggota['id_user']; ?>">
                                      <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h4 class="modal-title">Detail Data Anggota</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                            <div class="mb-3 row">
                                              <label for="" class="col-sm-3 col-form-label">Nama</label>
                                              <div class="col-sm-9">
                                                <input class="form-control" type="text" value="<?= $anggota['nama_user']; ?>" aria-label="readonly input example" readonly>
                                              </div>
                                            </div>
                                            <div class="mb-3 row">
                                              <label for="" class="col-sm-3 col-form-label">No HP</label>
                                              <div class="col-sm-9">
                                                <input class="form-control" type="text" value="<?= $anggota['no_telp']; ?>" aria-label="readonly input example" readonly>
                                              </div>
                                            </div>
                                            <div class="mb-3 row">
                                              <label for="" class="col-sm-3 col-form-label">NIK</label>
                                              <div class="col-sm-9">
                                                <input class="form-control" type="text" value="<?= $anggota['nik']; ?>" aria-label="readonly input example" readonly>
                                              </div>
                                            </div>
                                            <div class="mb-3 row">
                                              <label for="" class="col-sm-3 col-form-label">Tempat Lahir</label>
                                              <div class="col-sm-9">
                                                <input class="form-control" type="text" value="<?= $anggota['tempat_lahir']; ?>" aria-label="readonly input example" readonly>
                                              </div>
                                            </div>
                                            <div class="mb-3 row">
                                              <label for="" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                                              <div class="col-sm-9">
                                                <input class="form-control" type="text" value="<?= date('d-m-Y', strtotime($anggota['tanggal_lahir'])); ?>" aria-label="readonly input example" readonly>
                                              </div>
                                            </div>
                                            <div class="mb-3 row">
                                              <label for="" class="col-sm-3 col-form-label">Alamat</label>
                                              <div class="col-sm-9">
                                                <input class="form-control" type="text" value="<?= $anggota['alamat_user']; ?>" aria-label="readonly input example" readonly>
                                              </div>
                                            </div>
                                            <div class="mb-3 row">
                                              <label for="" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                              <div class="col-sm-9">
                                                <input class="form-control" type="text" value="<?= $anggota['jenis_kelamin']; ?>" aria-label="readonly input example" readonly>
                                              </div>
                                            </div>
                                            <div class="mb-3 row">
                                              <label for="" class="col-sm-3 col-form-label">Agama</label>
                                              <div class="col-sm-9">
                                                <input class="form-control" type="text" value="<?= $anggota['agama']; ?>" aria-label="readonly input example" readonly>
                                              </div>
                                            </div>
                                            <!-- <div class="mb-3 row">
                                              <label for="" class="col-sm-3 col-form-label">KTP</label>
                                              <div class="col-sm-9">
                                                <input class="form-control" type="text" value="<?= $anggota['ktp']; ?>" aria-label="readonly input example" readonly>
                                              </div>
                                            </div> -->
                                            <div class="mb-3 row">
                                              <label for="" class="col-sm-3 col-form-label">Jenis Pekerjaan</label>
                                              <div class="col-sm-9">
                                                <input class="form-control" type="text" value="<?= $anggota['jenis_pekerjaan']; ?>" aria-label="readonly input example" readonly>
                                              </div>
                                            </div>
                                            <div class="mb-3 row">
                                              <label for="" class="col-sm-3 col-form-label">Nama Perusahaan</label>
                                              <div class="col-sm-9">
                                                <input class="form-control" type="text" value="<?= $anggota['nama_perusahaan']; ?>" aria-label="readonly input example" readonly>
                                              </div>
                                            </div>
                                            <div class="mb-3 row">
                                              <label for="" class="col-sm-3 col-form-label">Jabatan</label>
                                              <div class="col-sm-9">
                                                <input class="form-control" type="text" value="<?= $anggota['jabatan']; ?>" aria-label="readonly input example" readonly>
                                              </div>
                                            </div>
                                            <div class="mb-3 row">
                                              <label for="" class="col-sm-3 col-form-label">Telephone Perusahaan</label>
                                              <div class="col-sm-9">
                                                <input class="form-control" type="text" value="<?= $anggota['telp_perusahaan']; ?>" aria-label="readonly input example" readonly>
                                              </div>
                                            </div>
                                            <div class="mb-3 row">
                                              <label for="" class="col-sm-3 col-form-label">Alamat Perusahaan</label>
                                              <div class="col-sm-9">
                                                <input class="form-control" type="text" value="<?= $anggota['alamat_perusahaan']; ?>" aria-label="readonly input example" readonly>
                                              </div>
                                            </div>
                                            <div class="mb-3 row">
                                              <label for="" class="col-sm-3 col-form-label">Jumlah Gaji</label>
                                              <div class="col-sm-9">
                                                <input class="form-control" type="text" value="<?= rupiah($anggota['jumlah_gaji']); ?>" aria-label="readonly input example" readonly>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="modal-footer justify-content-between">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
                                          </div>
                                        </div>
                                        <!-- /.modal-content -->
                                      </div>
                                      <!-- /.modal-dialog -->
                                    </div>

                                    <a href="hapus/hapus_anggota.php?id=<?= $anggota['id_user']; ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin untuk menghapus data?');"><i class="bi bi-trash"></i></a>
                                  </td>
                                </tr>
                              <?php } ?>
                            </tbody>
                          </table>
                        </div>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
              <!-- /.container-fluid -->
            </section>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>


    <div class="modal fade" id="modal-lg">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Form Tambah Data Anggota</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="tambah/tambah-anggota.php" method="GET">
            <div class="card-body">
              <div class="row mb-3">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="nama" name="nama" required>
                </div>
              </div>
              <div class="row mb-3">
                <label for="username" class="col-sm-2 col-form-label">Username</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="username" name="username" required>
                </div>
              </div>
              <div class="row mb-3">
                <label for="password" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                  <input type="password" class="form-control" id="password" name="password" required>
                </div>
              </div>
              <div class="row mb-3">
                <label for="notelephone" class="col-sm-2 col-form-label">No HP</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="notelephone" name="notelephone" required>
                </div>
              </div>
              <div class="row mb-3">
                <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="nik" name="nik" required>
                </div>
              </div>
              <div class="row mb-3">
                <label for="tempatlahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="tempatlahir" name="tempatlahir" required>
                </div>
              </div>
              <div class="row mb-3">
                <label for="tangallahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                <div class="col-sm-10">
                  <input class="form-control form-control" type="date" name="tanggallahir" placeholder="Tanggal Lahir" required>
                </div>
              </div>
              <div class="row mb-3">
                <label for=alamat_user" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                  <input class="form-control form-control" type="text" name="alamat_user" required>
                </div>
              </div>
              <div class="row mb-3">
                <label for="jeniskelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="jeniskelamin" name="jeniskelamin" required>
                </div>
              </div>
              <div class="row mb-3">
                <label for="agama" class="col-sm-2 col-form-label">Agama</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="agama" name="agama" required>
                </div>
              </div>
              <div class="row mb-3">
                <label for="exampleInputFile" class="col-sm-2 col-form-label">Upload KTP</label>
                <div class="col-sm-10">
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" name="ktp" class="custom-file-input" id="exampleInputFile" required>
                      <label class="custom-file-label" for="exampleInputFile"></label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row mb-3">
                <label for="jenispekerjaan" class="col-sm-2 col-form-label">Jenis Pekerjaan</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="jenispekerjaan" name="jenispekerjaan" required>
                </div>
              </div>
              <div class="row mb-3">
                <label for="perusahaan" class="col-sm-2 col-form-label">Nama Perusahaan</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="perusahaan" name="perusahaan" required>
                </div>
              </div>
              <div class="row mb-3">
                <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="jabatan" name="jabatan">
                </div>
              </div>
              <div class="row mb-3">
                <label for="notelpperusahaan" class="col-sm-2 col-form-label">No Telp Perusahaan</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="notelpperusahaan" name="notelpperusahaan">
                </div>
              </div>
              <div class="row mb-3">
                <label for="alamatperusahaan" class="col-sm-2 col-form-label">Alamat Perusahaan</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="alamatperusahaan" name="alamatperusahaan" required>
                </div>
              </div>
              <div class="row mb-3">
                <label for="jumlahgaji" class="col-sm-2 col-form-label">Jumlah Gaji</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="jumlahgaji" name="jumlahgaji" required>
                </div>
              </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Kirim</button>
              <a href="daata-anggota.php" type="submit" class="btn btn-default float-right">Cancel</a>
            </div>
          </form>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>





    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->
  <?php include('footer.php'); ?>