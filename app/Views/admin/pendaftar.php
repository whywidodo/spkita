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
               <div class="col-lg-12 col-md-auto col-sm-auto" style="font-size: 14px;">
                  <h1 class="h3">Pendaftar</h1>
                  <div class="row py-3">
                     <div class="col-lg-12 col-md-auto col-sm-auto">
                        <span>Data berikut merupakan informasi yang berkaitan dengan siswa pendaftar beasiswa.</span>
                     </div>
                  </div>
                  <div class="flash-data" data-flashdata="<?= session()->getFlashdata('flash'); ?>"></div>
                  <table class="table table-hover text-center">
                     <thead>
                        <tr>
                           <th>No</th>
                           <th>NISN</th>
                           <th>Nama</th>
                           <th>Jenis Kelamin</th>
                           <th>Alamat</th>
                           <th>Nomor Telp</th>
                           <th>Aksi</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php
                        $i = 1;
                        foreach ($dataPendaftar as $data) :
                        ?>
                           <tr>
                              <td><?= $i++; ?></td>
                              <td><?= $data['nisn_pendaftar']; ?></td>
                              <td><?= $data['nama_pendaftar']; ?></td>
                              <td><?= $data['jk_pendaftar']; ?></td>
                              <td><?= $data['alamat_pendaftar']; ?></td>
                              <td><?= $data['hp_pendaftar']; ?></td>
                              <td class="text-center">
                                 <form action="/administrator/pendaftar/detail/<?= $data['nisn_pendaftar']; ?>" method="POST" name="detail" class="d-inline-block">
                                    <?= csrf_field(); ?>
                                    <button type="submit" name="detail" class="btn btn-sm btn-success shadow-sm px-2"><i class="fas fa-eye fa-sm"></i>&nbsp;&nbsp;Detail</button>
                                 </form>
                                 <form action="/administrator/pendaftar/hapus/<?= $data['nisn_pendaftar']; ?>" method="POST" name="hapus" class="d-inline-block">
                                    <?= csrf_field(); ?>
                                    <button type="submit" name="hapus" class="btn btn-sm btn-danger shadow-sm px-2 tombol-hapus"><i class=" fas fa-trash fa-sm"></i>&nbsp;&nbsp;Hapus</button>
                                 </form>
                              </td>
                           </tr>
                        <?php endforeach; ?>
                     </tbody>
                  </table>
               </div>
               <div class="col-lg-12">

                  <!-- Modal -->
                  <div class="modal fade" id="modalEdit" tabindex="-1" aria-labelledby="modalAddLabel" aria-hidden="true">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <h1 class="modal-title fs-5" id="modalAdd">Edit Pendaftar</h1>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                           </div>
                           <div class="modal-body">
                              <form action="#" method="POST">
                                 <div class="mb-3">
                                    <span>Nama :</span>
                                    <input type="text" class="form-control" id="nama" name="nama">
                                 </div>
                                 <div class="mb-3">
                                    <span>NISN :</span>
                                    <input type="text" class="form-control" id="nisn" name="nisn">
                                 </div>
                                 <div class="mb-3">
                                    <span>Jenis Kelamin :</span><br>
                                    <div class="form-check form-check-inline mt-2">
                                       <input class="form-check-input" type="radio" name="inlineRadioOptions" id="pria" value="Laki-laki">
                                       <label class="form-check-label" for="pria">Laki-laki</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                       <input class="form-check-input" type="radio" name="inlineRadioOptions" id="perempuan" value="Perempuan">
                                       <label class="form-check-label" for="perepmuan">Perempuan</label>
                                    </div>
                                 </div>
                                 <div class="mb-3">
                                    <span>Alamat :</span>
                                    <input type="text" class="form-control" id="alamat" name="alamat">
                                 </div>
                                 <div class="mb-3">
                                    <span>Nomor Telp :</span>
                                    <input type="text" class="form-control" id="telp" name="telp">
                                 </div>

                                 <div class="modal-footer">
                                    <button type="submit" name="simpanKriteria" class="btn btn-success btn-sm">Simpan</button>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>

                  <div class="modal" tabindex="-1" id="modalDelete">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <h5 class="modal-title">Hapus Pendaftar</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                           </div>
                           <div class="modal-body">
                              <p>Apakah anda yakin akan menghapus item ini?</p>
                           </div>
                           <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Delete</button>
                              <button type="button" class="btn btn-primary">Cancel</button>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>



   </div>

   <!-- Pemanggilan footer -->
   <?= $this->include('admin/layouts/footer'); ?>
</body>

</html>