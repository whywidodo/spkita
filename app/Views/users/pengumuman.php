<?= $this->include('users/layouts/session'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>SPKita - Sistem Beasiswa Amikom</title>
   <!-- Pemanggilan header -->
   <?= $this->include('users/layouts/header'); ?>
</head>

<body>
   <div class="wrapper">
      <!-- Pemanggilan sidebar -->
      <?= $this->include('users/layouts/navbar'); ?>

      <!-- Pemanggilan sidebar -->
      <?= $this->include('users/layouts/sidebar'); ?>
   </div>
   <div class="content-wrapper bg-white">
      <!-- Area Konten -->
      <div class="col-lg-12 p-3">
         <div class="container text-start">
            <div class="row">
               <div class="col-lg-auto col-md-auto col-sm-auto" style="font-size: 14px;">
                  <h3>Pengumuman</h3>
                  <span>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed natus eos, molestias error asperiores
                     doloribus, totam ex libero soluta neque nulla tempora quasi. Consectetur, saepe culpa. Aliquam
                     ducimus veritatis reiciendis.
                     Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo unde quasi rerum tempora incidunt
                     tempore amet aliquam atque optio necessitatibus eum, quas error accusantium pariatur illo
                     distinctio modi quam quos.
                  </span>
               </div>
            </div>
         </div>
      </div>

   </div>
   <!-- Pemanggilan footer -->
   <?= $this->include('users/layouts/footer'); ?>
</body>

</html>