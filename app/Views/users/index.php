<?php 
$nama = session()->get('namaLengkap');
$username = session()->get('username');
$email = session()->get('email');
?>

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
</head>

<body>
   <div class="wrapper">
      <!-- Pemanggilan sidebar -->
      <?= $this->include('users/navbar'); ?>

      <!-- Pemanggilan sidebar -->
      <?= $this->include('users/sidebar'); ?>
   </div>
   <div class="content-wrapper bg-white">
      <!-- Area konten -->
      <div class="col-lg-12 p-3">
         <div class="container text-start">
            <div class="row">
               <div class="col-lg-auto col-md-auto col-sm-auto" style="font-size: 14px;">
                  <h3>Profile</h3>
                  <span>
                     Selamat datang di portal Web SPKita Beasiswa, jika anda mengalami kesulitan dalam melakukan
                     pendaftaran anda bisa membaca petunjuk pendaftaran atau dapat menghubungi CS yang tertera di laman
                     utama. Anda dapat mengatur password dan username akun anda di halaman ini.
                  </span>
                  <h4 class="mt-5 mb-3">Pengaturan Akun</h4>
                  <form action="post">
                  <div class="flash-data" data-flashdata="<?= session()->getFlashdata('flash'); ?>"></div>
                     <div class="form-group row">
                        <label for="inputNama" class="col-sm-2 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-10">
                           <input type="text" class="form-control" id="inputnama" placeholder="Nama Lengkap" value="<?= $nama ?>">
                        </div>
                     </div>
                     <div class="form-group row">
                        <label for="inputUsername" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-10">
                           <input type="text" class="form-control" id="inputUsername" placeholder="Username" value="<?= $username ?>">
                        </div>
                     </div>
                     <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                           <input type="text" class="form-control" id="inputEmail" placeholder="Email" value="<?= $email ?>">
                        </div>
                     </div>
                     <p style="color:red">
                        *abaikan jika tidak ingin mengganti password
                     </p>
                     <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                           <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                        </div>
                     </div>
                     <div class="form-group row">
                        <label for="inputUlangiPassword" class="col-sm-2 col-form-label">Ulangi Password</label>
                        <div class="col-sm-10">
                           <input type="password" class="form-control" id="inputUlangiPassword"
                              placeholder="Ulangi Password">
                        </div>
                     </div>
                     <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button type="update" class="btn btn-primary">Update</button>
                     </div>

                  </form>
               </div>
            </div>
         </div>
      </div>
      <!-- Area konten -->
   </div>

   <!-- sweetAlert -->
   <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

   <script src="<?= base_url(); ?>/assets/style/js/jquery-3.6.1.min.js"></script>
   <script src="<?= base_url(); ?>/assets/style/js/bootstrap.bundle.min.js"></script>
   <script src="<?= base_url(); ?>/assets/style/js/adminlte.min.js"></script>
   <script src="<?= base_url(); ?>/assets/fontawesome/js/all.min.js"></script>
   <script src="<?= base_url(); ?>/assets/sweetalert2/sweetalert2.all.min.js"></script>
   <script src="<?= base_url(); ?>/assets/sweetalert2/custom-alert.js"></script>
</body>

</html>