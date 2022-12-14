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
                        <span>Data berikut merupakan informasi yang berkaitan dengan siswa pendaftar beasiswa.</span>
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
                           <th>Tanggungan</th>
                           <th>Hasil Akhir</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php
                        $i = 1;
                        foreach ($dataPengumuman as $data) :
                           $normNilai = $data['nilai_rata'] / $dataNilai;
                           $normPenghasilan = $dataPenghasilan / $data['penghasilan_ortu'];
                           $normTanggungan = $data['tanggungan_ortu'] / $dataTanggungan;

                           $hasil = ($bobotNilai * $normNilai) + ($bobotPenghasilan * $normPenghasilan) + ($bobotTanggungan * $normTanggungan);
                        ?>
                           <tr>
                              <td><?= $i++; ?></td>
                              <td><?= $data['nisn']; ?></td>
                              <td><?= $data['email']; ?></td>
                              <td><?= $normNilai; ?></td>
                              <td><?= $normPenghasilan; ?></td>
                              <td><?= $normTanggungan; ?></td>
                              <td><?= $hasil; ?></td>
                           </tr>
                        <?php endforeach; ?>
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