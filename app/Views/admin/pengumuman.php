<?= $this->include('admin/layouts/session'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
      <!-- Area Konten -->
      <div class="col-lg-12 p-3">
         <div class="container text-start">
            <div class="row">
               <div class="col-lg-auto col-md-auto col-sm-auto" style="font-size: 14px;">
                  <h1 class="h3">Pengumuman</h1>
                  <div class="row py-3">
                     <div class="col-lg-12 col-md-auto col-sm-auto">
                        <span>Berikut ini merupakan hasil perhitungan beasiswa dengan menerapkan metode SAW. Data diurutkan berdasarkan hasil akhir yang diperoleh.</span>
                     </div>
                  </div>
                  <table class="table table-hover text-center">
                     <thead>
                        <tr>
                           <th>No</th>
                           <th>NISN</th>
                           <th>Email</th>
                           <th>Nilai</th>
                           <th>Penghasilan</th>
                           <th>Juz</th>
                           <th>Hasil Akhir SAW</th>
                           <th>Urutan</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php
                        $i = 1;
                        foreach ($dataFix as $data) :
                        ?>
                           <tr>
                              <td><?= $i; ?></td>
                              <td><?= $data['nisn']; ?></td>
                              <td><?= $data['email']; ?></td>
                              <td><?= $data['norm_nilai']; ?></td>
                              <td><?= $data['norm_penghasilan']; ?></td>
                              <td><?= $data['norm_tanggungan']; ?></td>
                              <td><?= $data['hasil_akhir']; ?></td>
                              <td><?= $i; ?></td>
                           </tr>
                        <?php
                           $i++;
                        endforeach;
                        ?>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>

   </div>

   <!-- Pemanggilan footer -->
   <?= $this->include('admin/layouts/footer'); ?>
</body>

</html>