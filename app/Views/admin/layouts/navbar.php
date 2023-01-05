  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white" style="background-color: #2174B8;">
     <!-- Navbar Kiri -->
     <ul class="navbar-nav">
        <li class="nav-item">
           <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
     </ul>

     <!-- Navbar Kanan -->
     <ul class="navbar-nav ml-auto">
        <li class="nav-item d-none d-sm-inline-block">
           <form action="<?= base_url('/login/logout'); ?>" method="POST">
              <?= csrf_field(); ?>
              <button type="submit" class="btn btn-sm shadow-sm tombol-logout text-white"><i class="fa-solid fa-door-open"></i>&nbsp;Logout</button>
           </form>
        </li>
     </ul>
  </nav>

  <!-- Modal -->
  <div class=" modal fade" id="modalLogout" tabindex="-1" aria-labelledby="modalLogoutLabel" aria-hidden="true">
     <div class="modal-dialog">
        <div class="modal-content">
           <div class="modal-header">
              <h1 class="modal-title fs-5" id="modalLogout">Konfirmasi Logout</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
           </div>
           <div class="modal-body">
              <form action="<?= base_url('/login/logout'); ?>" method="POST">
                 <div class="mb-3">
                    <span>Logout dari aplikasi SPKita?</span>
                 </div>
                 <div class="modal-footer">
                    <button type="submit" name="simpanKriteria" class="btn btn-primary btn-sm">Ya</button>
                 </div>
              </form>
           </div>
        </div>
     </div>
  </div>