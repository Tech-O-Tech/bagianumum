<?php

namespace App\Models;

use CodeIgniter\Model;

class JabatanModel extends Model
{
    protected $table = "jabatan";
    protected $primaryKey = "id_jabatan";
    protected $allowedFields = ["nama_jabatan"];
    protected $useTimestamps = false;

    public function getJabatan()
    {

        $query =  $this->db->table('jabatan')
            ->select('id_jabatan', 'nama_jabatan')
            ->get();
        return $query;
    }
}
