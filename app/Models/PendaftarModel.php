<?php

namespace App\Models;

use CodeIgniter\Model;

class PendaftarModel extends Model
{
   protected $table = 'tbl_pendaftar';
   protected $primaryKey = 'id_pendaftar';
   protected $allowedFields = ['nisn_pendaftar', 'nama_pendaftar', 'email_pendaftar', 'jk_pendaftar', 'tgl_pendaftar', 'alamat_pendaftar', 'hp_pendaftar', 'status_beasiswa'];
   protected $returnType       = 'array';
   protected $useTimestamps    = false;

   public function getPendaftar($slug = false)
   {
      $email = session()->get('email');
      if ($slug == false) {
         return $this->findAll();
      } else {
         return $this->where(['email_pendaftar' => $email])->first();
      }
   }
   public function getAllPendaftar()
   {
      $email = session()->get('email');
      if ($email == false) {
         return $this->findAll();
      } else {
         return $this->where(['email_pendaftar' => $email])->first();
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
   public function getPendaftarNISN($slug = false)
   {
      if ($slug == false) {
         return $this->findAll();
      } else {
         return $this->where(['nisn_pendaftar' => $slug])->first();
      }
   }
}
