<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangModel extends Model
{
    protected $table      = 'barang';
    protected $primaryKey = 'id_barang';
    //protected $useTimestamps = true;
    protected $returnType = "object";
    protected $allowedFields        = ["kode_barang", "nama", "volume", "satuan", "harga"];

    public function getProduk($id_barang = false)
    {
        if ($id_barang = false) {
            return $this->findAll();
        }

        return $this->where(['id_barang' => $id_barang])->first();
    }
}
