<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Pengumuman extends BaseController
{
   public function index()
   {
      return view('admin/pengumuman');
   }
}
