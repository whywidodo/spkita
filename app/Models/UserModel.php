<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
   protected $table = 'tbl_user';
   protected $primaryKey = 'id_user';
   protected $allowedFields = ['nama_lengkap', 'email', 'username', 'password', 'akses'];
   protected $returnType       = 'array';
   protected $useTimestamps    = false;
}
