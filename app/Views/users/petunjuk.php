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
                  <h3>Petunjuk</h3>
                  <span>
                     Untuk mendaftar beasiswa SPKita, terdapat beberapa langkah yang perlu dilakukan oleh siswa. berikut
                     adalah langkah-langkah yang perlu
                     dilakukan :
                     <br>
                     <br>
                     <ol>
                        <li>Buka website SPKita (https://spkita.my.id/)</li>
                        <li>Klik tombol "Daftar" di bagian kanan atas halaman</li>
                        <li>Isi formulir registrasi dengan mengisi data pribadi yang diperlukan, seperti nama, email,
                           dan
                           nomor telepon</li>
                        <li>Login menggunakan email dan password sesuai data saat proses registrasi</li>
                        <li>Upload dokumen dan data pribadi yang diperlukan pada bagian pendaftaran</li>
                        <li>Klik tombol "Daftar/Simpan" untuk menyelesaikan proses pendaftaran</li>
                        <li>Cek email yang digunakan saat pendaftaran untuk mendapatkan konfirmasi pendaftaran dan
                           instruksi
                           selanjutnya.</li>
                     </ol>
                     Pastikan anda mengisi data yang benar dan sesuai dengan persyaratan yang ditentukan oleh pihak
                     yang
                     menyelenggarakan beasiswa.

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