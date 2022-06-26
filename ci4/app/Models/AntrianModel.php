<?php

namespace App\Models;

use CodeIgniter\Model;

class AntrianModel extends Model
{
  protected $table = 'antrian';
  protected $primaryKey = 'id';
  protected $allowedFields = ['tanggal', 'no_antrian', 'status', 'waktu_panggil', 'waktu_selesai', 'pelayanan_id', 'loket_id'];


  // Inner Join
  public function getAll()
  {
    $builder = $this->table('antrian');
    $builder->join('loket', 'antrian.loket_id = loket.id');
    $builder->join('pelayanan', 'antrian.pelayanan_id = pelayanan.id');
    $builder->select('*');
    $query = $builder->get();
    return $query->getResult();
  }
}
