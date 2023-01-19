<?= $this->include('admin/layouts/session'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="<?= base_url(); ?>/assets/style/css/sb-admin-2.min.css">
   <title>SPKita - Sistem Beasiswa Amikom</title>
   <!-- Pemanggilan header -->
   <?= $this->include('admin/layouts/header'); ?>
</head>

<body>
   <div class="wrapper">
      <!-- Pemanggilan navbar -->
      <?= $this->include('admin/layouts/navbar'); ?>

      <!-- Pemanggilan sidebar -->
      <?= $this->include('admin/layouts/sidebar'); ?>
   </div>
   <div class="content-wrapper bg-white">
      <!-- Area konten -->
      <div class="col-lg-12 p-3">
         <div class="container text-start">
            <div class="row">
               <div class="col-lg-auto col-md-auto col-sm-auto" style="font-size: 14px;">
                  <h1>Dashboard</h1>
                  <span>
                     Selamat Datang di Aplikasi SPKita Solusi
                  </span>
               </div>
            </div>

            <div class="row mt-3">

               <!-- Earnings (Monthly) Card Example -->
               
                  <div class="card border-left-primary shadow h-100 py-2">
                     <div class="card-body">
                        <div class="row no-gutters align-items-center">
                           <div class="col mr-2">
                              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                 Akun Terdaftar</div>
                              <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_user; ?></div>
                           </div>
                           <div class="col-auto">
                              <i class="fas fa-user fa-2x text-gray-300"></i>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <!-- Earnings (Annual) Card Example -->
               <div class="col-xl-3 col-md-6 mb-4">
                  <div class="card border-left-success shadow h-100 py-2">
                     <div class="card-body">
                        <div class="row no-gutters align-items-center">
                           <div class="col mr-2">
                              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                 Pendaftar</div>
                              <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_pendaftar; ?></div>
                           </div>
                           <div class="col-auto">
                              <i class="fas fa-user-check fa-2x text-gray-300"></i>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Pending Requests Card Example -->
               <div class="col-xl-3 col-md-6 mb-4">
                  <div class="card border-left-warning shadow h-100 py-2">
                     <div class="card-body">
                        <div class="row no-gutters align-items-center">
                           <div class="col mr-2">
                              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                 Kuota</div>
                              <div class="h5 mb-0 font-weight-bold text-gray-800">20</div>
                           </div>
                           <div class="col-auto">
                              <i class="fas fa-comments fa-2x text-gray-300"></i>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Area konten -->
   </div>

   <!-- Pemanggilan footer -->
   <?= $this->include('admin/layouts/footer'); ?>
</body>

</html>