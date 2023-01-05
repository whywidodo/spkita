<?php

namespace App\Models;

use CodeIgniter\Model;

class PendaftarModel extends Model
{
   protected $table = 'tbl_pendaftar';
   protected $primaryKey = 'id_pendaftar';
   protected $allowedFields = ['nisn_pendaftar', 'nama_pendaftar', 'jk_pendaftar', 'alamat_pendaftar', 'hp_pendaftar'];
   protected $returnType       = 'array';
   protected $useTimestamps    = false;

   public function getPendaftar($slug = false)
   {
      if ($slug == false) {
         return $this->findAll();
      } else {
         return $this->where(['nisn_pendaftar' => $slug])->first();
      }
   }
   public function getPendaftarTambahan($slug = false)
   {
      $db      = \Config\Database::connect();
      if ($slug == false) {
         $builder = $db->table('tbl_hitung');
         $query = $builder->get();
         return $query->getResultArray();
      } else {
         $builder = $db->table('tbl_hitung')->where('nisn', $slug);
         $query = $builder->get();
         return $query->getResultArray();
      }
   }
}
