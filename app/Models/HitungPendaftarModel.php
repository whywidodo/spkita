<?php 
namespace App\Models;

use CodeIgniter\Model;

class HitungPendaftarModel extends Model{
  
  protected $table = 'tbl_pendaftar';
  public function hitungJumlahPendaftar()
  {   
      // $db      = \Config\Database::connect();
      $query = $this->db->table('tbl_pendaftar');
      if($query->countAllResults()>0)
      {
        return $query->countAllResults();
      }
      else
      {
        return 0;
      }
  }
} 
?>
