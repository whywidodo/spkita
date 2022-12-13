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
                  <h1>Profile</h1>
                  <span>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed natus eos, molestias error asperiores doloribus, totam ex libero soluta neque nulla tempora quasi. Consectetur, saepe culpa. Aliquam ducimus veritatis reiciendis.
                     Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo unde quasi rerum tempora incidunt tempore amet aliquam atque optio necessitatibus eum, quas error accusantium pariatur illo distinctio modi quam quos.
                  </span>
                  <h1>Pengaturan Akun</h1>
                  <form action="post">
                    <div class="form-group row">
                        <label for="inputNama" class="col-sm-2 col-form-label">Nama Lengkap</label>
                           <div class="col-sm-10">
                              <input type="text" class="form-control" id="inputnama" placeholder="Nama Lengkap">
                           </div>
                     </div>
                     <div class="form-group row">
                        <label for="inputUsername" class="col-sm-2 col-form-label">Username</label>
                           <div class="col-sm-10">
                              <input type="text" class="form-control" id="inputUsername" placeholder="Username">
                           </div>
                     </div>
                     <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                           <div class="col-sm-10">
                              <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                           </div>
                     </div>
                     <div class="form-group row">
                        <label for="inputUlangiPassword" class="col-sm-2 col-form-label">Ulangi Password</label>
                           <div class="col-sm-10">
                              <input type="password" class="form-control" id="inputUlangiPassword" placeholder="Ulangi Password">
                           </div>
                     </div>
                     <button type="update" class="btn btn-primary">Update</button>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <!-- Area konten -->
   </div>


   <script src="<?= base_url(); ?>/assets/style/js/jquery-3.6.1.min.js"></script>
   <script src="<?= base_url(); ?>/assets/style/js/bootstrap.bundle.min.js"></script>
   <script src="<?= base_url(); ?>/assets/style/js/adminlte.min.js"></script>
   <script src="<?= base_url(); ?>/assets/fontawesome/js/all.min.js"></script>
</body>

</html>