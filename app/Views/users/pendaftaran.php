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
      <section>
         <div class="container-fluid">
            <div class="col-rt-12">
               <div class="Scriptcontent">
                  <!-- START DEMO -->
                  <div class="tile" id="tile-1">

                     <!-- Nav tabs -->
                     <ul class="nav nav-tabs nav-justified" role="tablist">
                        <div class="slider"></div>
                        <li class="nav-item">
                           <a class="nav-link active" id="biodata-tab" data-toggle="tab" href="#biodata" role="tab" aria-controls="biodata" aria-selected="true"><i class="fas fa-id-card"></i> Biodata</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><i class="fas fa-graduation-cap"></i>
                              Sekolah</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false"><i class="fas fa-users "></i> Keluarga</a>
                        </li>
                     </ul>

                     <!-- Tab panes Biodata -->
                     <div class="tab-content">
                        <div class="tab-pane fade show active" id="biodata" role="tabpanel" aria-labelledby="biodata-tab">
                           <form action="post">
                              <div class="form-group row mt-3">
                                 <label for="inputNama" class="col-sm-3 col-form-label">Nama Lengkap</label>
                                 <div class="col-sm-9">
                                    <input type="text" class="form-control" name="nama" id="inputnama" placeholder="Nama Lengkap" required>
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label for="inputAlamat" class="col-sm-3 col-form-label">Alamat</label>
                                 <div class="col-sm-9">
                                    <textarea type="text" style="height:100px" class="form-control" name="alamat" id="inputAlamat" placeholder="Alamat" required></textarea>
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label for="inputGender" class="col-sm-3 col-form-label">Gender</label>
                                 <div class="col-sm-9 my-2">
                                    <input type="radio" name="gender" value="male" id="status_0" />Laki-laki
                                    <input class="mx-2" type="radio" name="gender" value="female" id="status_1" />Perempuan
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label for="inputTanggal" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                                 <div class="col-sm-9">
                                    <input type="date" class="form-control" id="tanggal" placeholder="Tanggal Lahir" required>
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label for="inputEmail" class="col-sm-3 col-form-label">Email</label>
                                 <div class="col-sm-9">
                                    <input type="text" class="form-control" name="email" id="inputEmail" placeholder="Email" required>
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label for="inputNoTelp" class="col-sm-3 col-form-label">No Telpon</label>
                                 <div class="col-sm-9">
                                    <input type="text" class="form-control" name="notelp" id="inputNoTelp" placeholder="No Telpon" required>
                                 </div>
                              </div>
                              <div class="form-group row justify-content-end mt-5">
                                 <div class="col-sm-4"></div>
                                 <div class="col-sm-2">
                                    <button type="button" class="btn btn-primary btn-block">Clear</button>
                                 </div>
                                 <div class="col-sm-2">
                                    <button type="button" class="btn btn-primary btn-block">Next</button>
                                 </div>
                              </div>
                           </form>
                        </div>

                        <!-- Asal Sekolah -->
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                           <form action="post">
                              <div class="form-group row mt-3">
                                 <label for="inputSekolah" class="col-sm-3 col-form-label">Asal Sekolah</label>
                                 <div class="col-sm-9">
                                    <input type="text" class="form-control" name="sekolah" id="inputSekolah" placeholder="Asal Sekolah" required>
                                 </div>
                              </div>
                              <div class="form-group row mt-3">
                                 <label for="inputNISN" class="col-sm-3 col-form-label">NISN</label>
                                 <div class="col-sm-9">
                                    <input type="text" class="form-control" name="nisn" id="inputNISN" placeholder="NISN" required>
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label for="inputLulus" class="col-sm-3 col-form-label">Tahun Lulus</label>
                                 <div class="col-sm-9">
                                    <input type="text" class="form-control" name="lulus" id="inputLulus" placeholder="Tahun Lulus" required>
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label for="inputRaport" class="col-sm-3 col-form-label">Rata-rata Nilai Raport</label>
                                 <div class="col-sm-9">
                                    <input type="text" class="form-control" name="report" id="inputRaport" placeholder="Rata-rata Nilai Raport Semester 1-5" required>
                                 </div>
                              </div>
                              <div class="form-group row justify-content-end mt-5">
                                 <div class="col-sm-4"></div>
                                 <div class="col-sm-2">
                                    <button type="button" class="btn btn-primary btn-block">Previous</button>
                                 </div>
                                 <div class="col-sm-2">
                                    <button type="button" class="btn btn-primary btn-block">Clear</button>
                                 </div>
                                 <div class="col-sm-2">
                                    <button type="button" class="btn btn-primary btn-block">Next</button>
                                 </div>
                              </div>
                           </form>
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                           <form action="post">
                              <div class="form-group row">
                                 <label for="inputSekolah" class="col-sm-3 col-form-label">Nama Wali</label>
                                 <div class="col-sm-9">
                                    <input type="text" class="form-control" name="keluarga" id="inputKeluarga" placeholder="Nama wali" required>
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label for="inputWali" class="col-sm-3 col-form-label">Status Wali</label>
                                 <div class="col-sm-9">
                                    <select class="form-control" name="wali">
                                       <option>Orang Tua</option>
                                       <option>Kakak</option>
                                       <option>Saudara</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label for="inputPekerjaan" class="col-sm-3 col-form-label">Pekerjan Wali</label>
                                 <div class="col-sm-9">
                                    <input type="text" class="form-control" name="pekerjaan" id="inputPekerjaan" placeholder="Pekerjaan Wali" required>
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label for="inputPenghasilan" class="col-sm-3 col-form-label">Penghasilan Wali</label>
                                 <div class="col-sm-9">
                                    <input type="text" class="form-control" name="penghasilan" id="inputPenghasilan" placeholder="Penghasilan Dalam 1 Bulan" required>
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label for="inputTanggungan" class="col-sm-3 col-form-label">Jumlah Tanggungan</label>
                                 <div class="col-sm-9">
                                    <select class="form-control" name="tanggungan">
                                       <option>1 Orang</option>
                                       <option>2 Orang</option>
                                       <option>3 Orang</option>
                                       <option>4 Orang</option>
                                       <option>> 4 Orang</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="form-group row justify-content-end mt-5">
                                 <div class="col-sm-4"></div>
                                 <div class="col-sm-2">
                                    <button type="button" class="btn btn-primary btn-block">Previous</button>
                                 </div>
                                 <div class="col-sm-2">
                                    <button type="button" class="btn btn-primary btn-block">Clear</button>
                                 </div>
                                 <div class="col-sm-2">
                                    <button type="button" class="btn btn-primary btn-block">Daftar</button>
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>

                  </div>
                  <!-- partial -->
                  <!-- jQuery JS -->
                  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
                  <!-- sweetAlert -->
                  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                  <!-- Bootstrap JS -->
                  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js'>
                  </script>

                  <script>
                     $(document).ready(function() {

                        $("#tile-1 .nav-tabs a").click(function() {

                           var position = $(this).parent().position();

                           var width = $(this).parent().width();

                           $("#tile-1 .slider").css({
                              "left": +position.left,
                              "width": width
                           });

                        });
                        var actWidth = $("#tile-1 .nav-tabs").find(".active").parent("li").width();

                        var actPosition = $("#tile-1 .nav-tabs .active").position();

                        $("#tile-1 .slider").css({
                           "left": +actPosition.left,
                           "width": actWidth
                        });

                     });
                  </script>
                  <!-- END DEMO -->

               </div>
            </div>
         </div>
      </section>
   </div>
   <!-- Pemanggilan footer -->
   <?= $this->include('users/layouts/footer'); ?>
</body>

</html>