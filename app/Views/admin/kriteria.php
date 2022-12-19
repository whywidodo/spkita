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
                  <h1 class="h3">Kriteria</h1>
                  <div class="row py-3">
                     <div class="col-lg-8 col-md-auto col-sm-auto">
                        <span>Data berikut merupakan informasi yang berkaitan dengan keriteris beasiswa.</span>
                     </div>
                     <div class="col-lg-4">
                        <button type="button" data-bs-toggle="modal" data-bs-target="#modalAdd" class="btn btn-success btn-sm text-white float-end"><i class="fa-solid fa-plus"></i> Tambah Data</button>
                     </div>
                  </div>
                  <table class="table table-hover text-center">
                     <thead>
                        <tr>
                           <th>No</th>
                           <th>Kode Kriteria</th>
                           <th>Nama Kriteria</th>
                           <th>Bobot</th>
                           <th>Jenis</th>
                           <th>Aksi</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td>1</td>
                           <td>KR001</td>
                           <td>Penghasilan</td>
                           <td>5</td>
                           <td>Cost</td>
                           <td class="text-center">
                              <button type="submit" name="edit" class="btn btn-warning btn-sm text-white" style="width: 60px;">Edit</button>
                              <button type="submit" name="hapus" class="btn btn-danger btn-sm text-white" style="width: 60px;">Hapus</button>
                           </td>
                        </tr>
                        <tr>
                           <td>2</td>
                           <td>KR002</td>
                           <td>Tanggungan</td>
                           <td>4</td>
                           <td>Benefit</td>
                           <td class="text-center">
                              <button type="submit" name="edit" class="btn btn-warning btn-sm text-white" style="width: 60px;">Edit</button>
                              <button type="submit" name="hapus" class="btn btn-danger btn-sm text-white" style="width: 60px;">Hapus</button>
                           </td>
                        </tr>
                        <tr>
                           <td>3</td>
                           <td>KR003</td>
                           <td>Semester</td>
                           <td>3</td>
                           <td>Benefit</td>
                           <td class="text-center">
                              <button type="submit" name="edit" class="btn btn-warning btn-sm text-white" style="width: 60px;">Edit</button>
                              <button type="submit" name="hapus" class="btn btn-danger btn-sm text-white" style="width: 60px;">Hapus</button>
                           </td>
                        </tr>
                        <tr>
                           <td>4</td>
                           <td>KR004</td>
                           <td>IPK</td>
                           <td>2</td>
                           <td>Benefit</td>
                           <td class="text-center">
                              <button type="submit" name="edit" class="btn btn-warning btn-sm text-white" style="width: 60px;">Edit</button>
                              <button type="submit" name="hapus" class="btn btn-danger btn-sm text-white" style="width: 60px;">Hapus</button>
                           </td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <div class="col-lg-12">

                  <!-- Modal -->
                  <div class="modal fade" id="modalAdd" tabindex="-1" aria-labelledby="modalAddLabel" aria-hidden="true">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <h1 class="modal-title fs-5" id="modalAdd">Tambah Kriteria</h1>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                           </div>
                           <div class="modal-body">
                              <form action="#" method="POST">
                                 <div class="mb-3">
                                    <span>Kode kriteria:</span>
                                    <input type="text" class="form-control" id="kodekriteria" name="kodekriteria">
                                 </div>
                                 <div class="mb-3">
                                    <span>Nama kriteria:</span>
                                    <input type="text" class="form-control" id="namakriteria" name="namakriteria">
                                 </div>
                                 <div class="mb-3">
                                    <span>Bobot kriteria:</span>
                                    <input type="text" class="form-control" id="bobotkriteria" name="bobotkriteria">
                                 </div>
                                 <div class="mb-3">
                                    <span>Jenis kriteria:</span>
                                    <input type="text" class="form-control" id="jeniskriteria" name="jeniskriteria">
                                 </div>

                                 <div class="modal-footer">
                                    <button type="submit" name="simpanKriteria" class="btn btn-success btn-sm">Simpan</button>
                                 </div>
                              </form>
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