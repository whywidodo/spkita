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
      <div class="col-lg-12 p-3">
         <div class="container text-start">
            <div class="row">
               <div class="col-lg-12 col-md-auto col-sm-auto" style="font-size: 14px;">
                  <h1 class="h3">Kriteria</h1>
                  <div class="row py-3">
                     <div class="col-lg-8 col-md-auto col-sm-auto">
                        <span>Data berikut merupakan informasi yang berkaitan dengan keriteria beasiswa.</span>
                     </div>
                     <div class="col-lg-4">
                        <button type="button" data-bs-toggle="modal" data-bs-target="#modalAdd" class="btn btn-success btn-sm text-white float-end"><i class="fa-solid fa-plus"></i> Tambah Data</button>
                        <div class="col-lg-12">
                           <div class="modal fade" id="modalAdd" tabindex="-1" aria-labelledby="modalAddLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                 <div class="modal-content">
                                    <div class="modal-header">
                                       <h1 class="modal-title fs-5" id="modalAdd">Tambah Kriteria</h1>
                                       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                       <div class="flash-data" data-flashdata="<?= session()->getFlashdata('flash'); ?>"></div>
                                       <form action="/administrator/kriteria/tambah" method="POST">
                                          <div class="mb-3">
                                             <span>Kode kriteria:</span>
                                             <input type="text" class="form-control kode" id="kodekriteria" name="kodekriteria">
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
                                             <select class="form-select" name="jeniskriteria">
                                                <option value="benefit">Benefit</option>
                                                <option value="cost">Cost</option>
                                             </select>
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
                        <?php
                        $i = 1;
                        foreach ($dataKriteria as $data) :
                        ?>
                           <tr>
                              <td><?= $i++; ?></td>
                              <td><?= $data['kode_kriteria']; ?></td>
                              <td><?= $data['nama_kriteria']; ?></td>
                              <td><?= $data['bobot_kriteria']; ?></td>
                              <td><?= $data['jenis_kriteria']; ?></td>
                              <td class="text-center">
                                 <button type="button" name="edit" class="btn btn-sm btn-primary shadow-sm px-2" data-bs-toggle="modal" data-bs-target="#modalEdit<?= $data['kode_kriteria']; ?>">
                                    <i class="fas fa-pencil fa-sm"></i>&nbsp;&nbsp;Edit
                                 </button>
                                 <form action="/administrator/kriteria/hapus/<?= $data['kode_kriteria']; ?>" method="POST" name="hapus" class="d-inline-block">
                                    <?= csrf_field(); ?>
                                    <button type="submit" name="hapus" class="btn btn-sm btn-danger shadow-sm px-2 tombol-hapus"><i class=" fas fa-trash fa-sm"></i>&nbsp;&nbsp;Hapus</button>
                                 </form>
                              </td>
                           </tr>

                           <!-- Modal Edit -->
                           <div class="modal fade" id="modalEdit<?= $data['kode_kriteria']; ?>" tabindex="-1" aria-labelledby="modalEditLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                 <div class="modal-content">
                                    <div class="modal-header">
                                       <h1 class="modal-title fs-5" id="modalAdd">Edit Kriteria</h1>
                                       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                       <form action="/administrator/kriteria/edit/<?= $data['id_kriteria']; ?>" method="POST">
                                          <div class="mb-3">
                                             <span>Kode kriteria:</span>
                                             <input type="text" class="form-control kode" id="kodekriteria" name="editKode" value="<?= $data['kode_kriteria']; ?>">
                                          </div>
                                          <div class="mb-3">
                                             <span>Nama kriteria:</span>
                                             <input type="text" class="form-control" id="namakriteria" name="editNama" value="<?= $data['nama_kriteria']; ?>">
                                          </div>
                                          <div class="mb-3">
                                             <span>Bobot kriteria:</span>
                                             <input type="text" class="form-control" id="bobotkriteria" name="editBobot" value="<?= $data['bobot_kriteria']; ?>">
                                          </div>
                                          <div class="mb-3">
                                             <span>Jenis kriteria:</span>
                                             <select class="form-select" name="editJenis">
                                                <?php
                                                if ($data['jenis_kriteria'] == "benefit") {
                                                ?>
                                                   <option value="benefit" selected>Benefit</option>
                                                   <option value="cost">Cost</option>
                                                <?php } else { ?>
                                                   <option value="benefit">Benefit</option>
                                                   <option value="cost" selected>Cost</option>
                                                <?php } ?>
                                             </select>
                                          </div>

                                          <div class="modal-footer">
                                             <button type="submit" name="updateKriteria" class="btn btn-success btn-sm">Update</button>
                                          </div>
                                       </form>
                                    </div>
                                 </div>
                              </div>
                           </div>
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