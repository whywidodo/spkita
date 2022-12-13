<?php

namespace App\Controllers\Users;

use App\Controllers\BaseController;

class Pengumuman extends BaseController
{
   public function index()
   {
      return view('users/pengumuman');
   }
}
