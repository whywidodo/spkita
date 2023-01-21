<?php

namespace App\Models;

use CodeIgniter\Model;



class HitungankuModel extends Model
{
   protected $table = 'tbl_hitunganku';
   protected $primaryKey = 'id_hitung';
   protected $allowedFields = ['email', 'nisn', 'asal_sekolah', 'tahun_lulus', 'nilai_rata', 'bukti_nilai', 'nama_ortu', 'status_ortu', 'pekerjaan_ortu', 'penghasilan_ortu', 'tanggungan_ortu', 'norm_nilai', 'norm_penghasilan', 'norm_tanggungan', 'hasil_akhir'];
   protected $returnType       = 'array';
   protected $useTimestamps    = false;

   public function getHitunganku($slug = false)
   {
      if ($slug == false) {
         return $this->orderBy('hasil_akhir', 'DESC')->findAll();
      } else {
         return $this->where(['nisn' => $slug])->first();
      }
   }

   public function getHitNilaiMax()
   {
      $db      = \Config\Database::connect();
      $builder = $db->table('tbl_hitung')->selectMax('nilai_rata');
      $query = $builder->get();
      return $query->getRow('nilai_rata');
   }

   public function getHitPenghasilanMin()
   {
      $db      = \Config\Database::connect();
      $builder = $db->table('tbl_hitung')->selectMin('penghasilan_ortu');
      $query = $builder->get();
      return $query->getRow('penghasilan_ortu');
   }

   public function getHitTanggunganMax()
   {
      $db      = \Config\Database::connect();
      $builder = $db->table('tbl_hitung')->selectMax('tanggungan_ortu');
      $query = $builder->get();
      return $query->getRow('tanggungan_ortu');
   }
}
