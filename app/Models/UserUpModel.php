<?php

namespace App\Models;

use CodeIgniter\Model;

class UserUpModel extends Model
{
   protected $table = 'tbl_user';
   protected $primaryKey = 'email';
   protected $allowedFields = ['nama_lengkap', 'email', 'username', 'password', 'akses'];
   protected $returnType       = 'array';
   protected $useTimestamps    = false;
}
