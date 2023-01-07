<?php
$akses = session()->get('akses');
if (!session()->get('logged_in')) {
   header('Location: /login');
   exit();
} else if (session()->get('logged_in') && $akses == "admin") {
   header('Location: /administrator');
   exit();
}
