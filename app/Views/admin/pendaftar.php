<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>SPKita - Sistem Beasiswa Amikom</title>
   <link rel="stylesheet" href="<?= base_url(); ?>/assets/style/css/bootstrap.css">
   <link rel="stylesheet" href="<?= base_url(); ?>/assets/style/css/custom.css">
   <link rel="stylesheet" href="<?= base_url(); ?>/assets/style/css/adminlte.min.css">
   <link rel="stylesheet" href="<?= base_url(); ?>/assets/fontawesome/css/all.min.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
</head>

<body>
   <div class="wrapper">
      <!-- Pemanggilan sidebar -->
      <?= $this->include('admin/navbar'); ?>

      <!-- Pemanggilan sidebar -->
      <?= $this->include('admin/sidebar'); ?>
   </div>

   <div class="content-wrapper bg-white">
      <!-- Area Konten -->
      <div class="col-lg-12 p-3">
         <div class="container text-start">
            <div class="row">
               <div class="col-lg-12 col-md-auto col-sm-auto" style="font-size: 14px;">
                  <h1 class="h3">Pendaftar</h1>
                  <div class="row py-3">
                     <div class="col-lg-8 col-md-auto col-sm-auto">
                        <span>Data berikut merupakan informasi yang berkaitan dengan siswa pendaftar beasiswa.</span>
                     </div>
                  </div>
                  <table class="table table-hover text-center">
                     <thead>
                        <tr>
                           <th>No</th>
                           <th>Nama</th>
                           <th>NISN</th>
                           <th>Jenis Kelamin</th>
                           <th>Alamat</th>
                           <th>Nomor Telp</th>
                           <th>Aksi</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td>1</td>
                           <td>Fitroh</td>
                           <td>12345</td>
                           <td>Perempuan</td>
                           <td>Tegal</td>
                           <td>09882376439</td>
                           <td class="text-center">
                              <button type="submit" name="lihat" class="btn btn-primary btn-sm text-white"
                                 style="width: 60px;"><i class="bi bi-eye-fill"></i></button>
                              <button type="submit" name="edit" class="btn btn-warning btn-sm text-white"
                                 style="width: 60px;" data-bs-toggle="modal" data-bs-target="#modalEdit"><i
                                    class="bi bi-pencil-fill"></i></button>
                              <button type="submit" name="hapus" class="btn btn-danger btn-sm text-white"
                                 style="width: 60px;"><i class="bi bi-trash3-fill" data-bs-toggle="modal"
                                    data-bs-target="#modalDelete"></i></button>
                           </td>
                        </tr>
                        <tr>
                           <td>2</td>
                           <td>Fitroh</td>
                           <td>12345</td>
                           <td>Perempuan</td>
                           <td>Tegal</td>
                           <td>09882376439</td>
                           <td class="text-center">
                              <button type="submit" name="lihat" class="btn btn-primary btn-sm text-white"
                                 style="width: 60px;"><i class="bi bi-eye-fill"></i></button>
                              <button type="button" name="edit" class="btn btn-warning btn-sm text-white"
                                 style="width: 60px;" data-bs-toggle="modal" data-bs-target="#modalEdit"><i
                                    class="bi bi-pencil-fill"></i></button>
                              <button type="submit" name="hapus" class="btn btn-danger btn-sm text-white"
                                 style="width: 60px;"><i class="bi bi-trash3-fill" data-bs-toggle="modal"
                                    data-bs-target="#modalDelete"></i></button>
                           </td>
                        </tr>
                        <tr>
                           <td>3</td>
                           <td>Widodo</td>
                           <td>12345</td>
                           <td>Laki-laki</td>
                           <td>Tegal</td>
                           <td>09882376439</td>
                           <td class="text-center">
                              <button type="submit" name="lihat" class="btn btn-primary btn-sm text-white"
                                 style="width: 60px;"><i class="bi bi-eye-fill"></i></button>
                              <button type="submit" name="edit" class="btn btn-warning btn-sm text-white"
                                 style="width: 60px;" data-bs-toggle="modal" data-bs-target="#modalEdit"><i
                                    class="bi bi-pencil-fill"></i></button>
                              <button type="submit" name="hapus" class="btn btn-danger btn-sm text-white"
                                 style="width: 60px;"><i class="bi bi-trash3-fill" data-bs-toggle="modal"
                                    data-bs-target="#modalDelete"></i></button>
                           </td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <div class="col-lg-12">

                  <!-- Modal -->
                  <div class="modal fade" id="modalEdit" tabindex="-1" aria-labelledby="modalAddLabel"
                     aria-hidden="true">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <h1 class="modal-title fs-5" id="modalAdd">Edit Pendaftar</h1>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                 aria-label="Close"></button>
                           </div>
                           <div class="modal-body">
                              <form action="#" method="POST">
                                 <div class="mb-3">
                                    <span>Nama :</span>
                                    <input type="text" class="form-control" id="nama" name="nama">
                                 </div>
                                 <div class="mb-3">
                                    <span>NISN :</span>
                                    <input type="text" class="form-control" id="nisn" name="nisn">
                                 </div>
                                 <div class="mb-3">
                                    <span>Jenis Kelamin :</span><br>
                                    <div class="form-check form-check-inline mt-2">
                                       <input class="form-check-input" type="radio" name="inlineRadioOptions" id="pria"
                                          value="Laki-laki">
                                       <label class="form-check-label" for="pria">Laki-laki</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                       <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                          id="perempuan" value="Perempuan">
                                       <label class="form-check-label" for="perepmuan">Perempuan</label>
                                    </div>
                                 </div>
                                 <div class="mb-3">
                                    <span>Alamat :</span>
                                    <input type="text" class="form-control" id="alamat" name="alamat">
                                 </div>
                                 <div class="mb-3">
                                    <span>Nomor Telp :</span>
                                    <input type="text" class="form-control" id="telp" name="telp">
                                 </div>

                                 <div class="modal-footer">
                                    <button type="submit" name="simpanKriteria"
                                       class="btn btn-success btn-sm">Simpan</button>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>

                  <div class="modal" tabindex="-1" id="modalDelete">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <h5 class="modal-title">Hapus Pendaftar</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                 aria-label="Close"></button>
                           </div>
                           <div class="modal-body">
                              <p>Apakah anda yakin akan menghapus item ini?</p>
                           </div>
                           <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Delete</button>
                              <button type="button" class="btn btn-primary">Cancel</button>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>



   </div>


   <script src="<?= base_url(); ?>/assets/style/js/jquery-3.6.1.min.js"></script>
   <script src="<?= base_url(); ?>/assets/style/js/bootstrap.bundle.min.js"></script>
   <script src="<?= base_url(); ?>/assets/style/js/adminlte.min.js"></script>
   <script src="<?= base_url(); ?>/assets/fontawesome/js/all.min.js"></script>
</body>

</html>