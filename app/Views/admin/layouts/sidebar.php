<!-- Area Sidebar-->
<aside class="main-sidebar sidebar-light-primary elevation-4 min-vh-100" style="background-color: #2174B8; position: fixed;">
   <a href="<?= base_url(); ?>/administrator" class="brand-link" style="margin-left: 20px;">
      <span class="brand-text font-weight-light" style="color: #FFFFFF;"><i class="fa-solid fa-graduation-cap"></i>&nbsp;SPKita</span>
   </a>

   <!-- Sidebar -->
   <div class="sidebar">
      <!-- Menu Sidebar -->
      <nav class="mt-2">
         <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
               <a href="<?= base_url(); ?>/administrator" class="nav-link">
                  <i class="nav-icon fa-solid fa-house" style="color: #FFFFFF;"></i>
                  <p style="color: #FFFFFF;">Dashboard</p>
               </a>
            </li>
            <li class="nav-item">
               <a href="<?= base_url(); ?>/administrator/kriteria" class="nav-link">
                  <i class="nav-icon fa-solid fa-list" style="color: #FFFFFF;"></i>
                  <p class="text" style="color: #FFFFFF;">Kriteria</p>
               </a>
            </li>
            <li class="nav-item">
               <a href="<?= base_url(); ?>/administrator/pendaftar" class="nav-link">
                  <i class="nav-icon fa-solid fa-users" style="color: #FFFFFF;"></i>
                  <p class="text" style="color: #FFFFFF;">Pendaftar</p>
               </a>
            </li>
            <li class="nav-item">
               <a href="<?= base_url(); ?>/administrator/pengumuman" class="nav-link">
                  <i class="nav-icon fa-solid fa-bullhorn" style="color: #FFFFFF;"></i>
                  <p class="text" style="color: #FFFFFF;">Pengumuman</p>
               </a>
            </li>
            <!-- <li class="nav-item">
               <a href="<?= base_url(); ?>/administrator/pengaturan" class="nav-link">
                  <i class="nav-icon fa-solid fa-cog" style="color: #FFFFFF;"></i>
                  <p class="text" style="color: #FFFFFF;">Pengaturan</p>
               </a>
            </li> -->
         </ul>

      </nav>
      <!-- Menu Sidebar -->
   </div>
   <!-- Sidebar -->
</aside>