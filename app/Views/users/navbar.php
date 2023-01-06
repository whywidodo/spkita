<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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