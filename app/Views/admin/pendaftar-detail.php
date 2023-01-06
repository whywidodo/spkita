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
      <!-- Pemanggilan sidebar -->
      <?= $this->include('admin/layouts/navbar'); ?>

      <!-- Pemanggilan sidebar -->
      <?= $this->include('admin/layouts/sidebar'); ?>
   </div>

   <div class="content-wrapper bg-white">
      <!-- Area Konten -->
      <div class="container rounded bg-white mt-3 mb-5">
         <div class="row">
            <div class="col-lg-12 col-md-auto col-sm-auto px-3" style="font-size: 14px;">
               <h1 class="h3">Detail Pendaftar</h1>
            </div>
            <div class="col-md-3 border-right">
               <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                  <img class="rounded-circle mt-5" width="150px" src="<?= base_url(); ?>/assets/images/user-detail.png">
                  <span class="font-weight-bold"><?= $dataPribadi['nama_pendaftar']; ?></span>
                  <span class="text-black-50"><?= $dataPribadi['email_pendaftar']; ?></span>
               </div>
            </div>

            <form action="<?= base_url('/administrator/pendaftar/edit'); ?>" method="post">
               <div class="col-md-5">
                  <div class="p-2">
                     <div class="row mt-2">
                        <div class="col-md-12 py-1">
                           <label for="wali">Data pribadi</label><br>
                           <span>NISN</span>
                           <input type="text" name="nisn" class="form-control" placeholder="nisn" value="<?= $dataPribadi['nisn_pendaftar']; ?>">
                        </div>
                        <div class="col-md-12 py-1">
                           <span>Nama Lengkap</span>
                           <input type="text" name="nama" class="form-control" placeholder="nama lengkap" value="<?= $dataPribadi['nama_pendaftar']; ?>">
                        </div>
                        <div class="col-md-12 py-1">
                           <span>Email</span>
                           <input type="email" name="email" class="form-control" placeholder="e-mail" value="<?= $dataPribadi['email_pendaftar']; ?>">
                        </div>
                        <div class="col-md-12 py-1">
                           <span>Jenis Kelamin</span>
                        </div>
                        <div class="col-md-12">
                           <?php
                           if ($dataPribadi['jk_pendaftar'] == "Laki-laki") {
                           ?>
                              <div class="form-check form-check-inline">
                                 <input class="form-check-input" type="radio" name="jenkel" id="pria" value="Laki-laki" checked>
                                 <label class="form-check-label" for="pria">Laki-laki</label>
                              </div>
                              <div class="form-check form-check-inline">
                                 <input class="form-check-input" type="radio" name="jenkel" id="perempuan" value="Perempuan">
                                 <label class="form-check-label" for="perepmuan">Perempuan</label>
                              </div>
                           <?php } else if ($dataPribadi['jk_pendaftar'] == "Perempuan") { ?>
                              <div class="form-check form-check-inline">
                                 <input class="form-check-input" type="radio" name="jenkel" id="pria" value="Laki-laki">
                                 <label class="form-check-label" for="pria">Laki-laki</label>
                              </div>
                              <div class="form-check form-check-inline">
                                 <input class="form-check-input" type="radio" name="jenkel" id="perempuan" value="Perempuan" checked>
                                 <label class="form-check-label" for="perepmuan">Perempuan</label>
                              </div>
                           <?php } else { ?>
                              <div class="form-check form-check-inline">
                                 <input class="form-check-input" type="radio" name="jenkel" id="pria" value="Laki-laki">
                                 <label class="form-check-label" for="pria">Laki-laki</label>
                              </div>
                              <div class="form-check form-check-inline">
                                 <input class="form-check-input" type="radio" name="jenkel" id="perempuan" value="Perempuan">
                                 <label class="form-check-label" for="perepmuan">Perempuan</label>
                              </div>
                           <?php } ?>
                        </div>
                        <div class="col-md-12 py-1">
                           <span>Tanggal Lahir</span>
                           <input type="date" name="ttl" class="form-control" placeholder="enter address line 2" value="<?= $dataPribadi['tgl_pendaftar']; ?>">
                        </div>
                        <div class="col-md-12 py-1">
                           <span>Alamat</span>
                           <textarea class="form-control" name="alamat" placeholder="alamat" style="height: 100px"><?= $dataPribadi['alamat_pendaftar']; ?></textarea>
                        </div>
                        <div class="col-md-12 py-1">
                           <span>Hp</span>
                           <input type="text" name="hp" class="form-control" placeholder="hp" value="<?= $dataPribadi['hp_pendaftar']; ?>">
                        </div>
                     </div>
                  </div>
               </div>

               <div class="col-md-4">
                  <div class="p-2">
                     <div class="row mt-2">
                        <div class="col-md-12 py-1">
                           <label for="wali">Sekolah</label><br>
                           <span>Asal Sekolah</span>
                           <input type="text" name="sekolah" class="form-control" placeholder="asal sekolah" value="<?= $dataTambahan[0]['asal_sekolah']; ?>">
                        </div>
                        <div class="col-md-6 py-1">
                           <span>Tahun Lulus</span>
                           <input type="text" name="lulus" class="form-control" placeholder="tahun lulus" value="<?= $dataTambahan[0]['tahun_lulus']; ?>">
                        </div>
                        <div class="col-md-6 py-1">
                           <span>Nilai Rata-rata</span>
                           <input type="text" name="rata" class="form-control" placeholder="nilai" value="<?= $dataTambahan[0]['nilai_rata']; ?>">
                        </div>
                        <div class="col-md-12 py-1">
                           <label for="wali">Orangtua / Wali siswa</label><br>
                           <span>Nama Wali</span>
                           <input type="text" name="namawali" class="form-control" placeholder="nama wali" value="<?= $dataTambahan[0]['nama_ortu']; ?>">
                        </div>
                        <div class="col-md-12 py-1">
                           <span>Status Wali</span>
                           <input type="text" name="statuswali" class="form-control" placeholder="status" value="<?= $dataTambahan[0]['status_ortu']; ?>">
                        </div>
                        <div class="col-md-12 py-1">
                           <span>Pekerjaan Wali</span>
                           <input type="text" name="kerjawali" class="form-control" placeholder="pekerjaan" value="<?= $dataTambahan[0]['pekerjaan_ortu']; ?>">
                        </div>
                        <div class="col-md-12 py-1">
                           <span>Penghasilan Wali</span>
                           <input type="number" name="hasilwali" class="form-control" placeholder="penghasilan" value="<?= $dataTambahan[0]['penghasilan_ortu']; ?>">
                        </div>
                        <div class="col-md-6 py-1">
                           <span>Tanggungan Wali</span>
                           <input type="number" name="tanggungwali" class="form-control" placeholder="tanggungan" value="<?= $dataTambahan[0]['tanggungan_ortu']; ?>">
                        </div>
                     </div>
                  </div>
               </div>

               <div class="mt-2 text-center">
                  <button class="btn btn-primary profile-button" type="button">Perbarui</button>
               </div>
            </form>
         </div>
      </div>
   </div>
   </div>

   </div>

   <!-- Pemanggilan footer -->
   <?= $this->include('admin/layouts/footer'); ?>
</body>

</html>