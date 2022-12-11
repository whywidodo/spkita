<?php

namespace App\Controllers\Users;

use App\Controllers\BaseController;

class Petunjuk extends BaseController
{
   public function index()
   {
      return view('users/petunjuk');
   }
}
