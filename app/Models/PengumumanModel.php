<?php

namespace App\Models;

use CodeIgniter\Model;



class PengumumanModel extends Model
{
   protected $table = 'tbl_hitung';
   protected $primaryKey = 'id_hitung';
   protected $allowedFields = ['email', 'nisn', 'asal_sekolah', 'tahun_lulus', 'nilai_rata', 'nama_ortu', 'status_ortu', 'pekerjaan_ortu', 'penghasilan_ortu', 'tanggungan_ortu'];
   protected $returnType       = 'array';
   protected $useTimestamps    = false;

   public function getPengumuman($slug = false)
   {
      if ($slug == false) {
         return $this->findAll();
      } else {
         return $this->where(['nisn' => $slug])->first();
      }
   }

   public function getNilaiMax()
   {
      $db      = \Config\Database::connect();
      $builder = $db->table('tbl_hitung')->selectMax('nilai_rata');
      $query = $builder->get();
      return $query->getRow('nilai_rata');
   }

   public function getPenghasilanMin()
   {
      $db      = \Config\Database::connect();
      $builder = $db->table('tbl_hitung')->selectMin('penghasilan_ortu');
      $query = $builder->get();
      return $query->getRow('penghasilan_ortu');
   }

   public function getTanggunganMax()
   {
      $db      = \Config\Database::connect();
      $builder = $db->table('tbl_hitung')->selectMax('tanggungan_ortu');
      $query = $builder->get();
      return $query->getRow('tanggungan_ortu');
   }
}
