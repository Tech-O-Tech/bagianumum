<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = "tb_user";
    protected $primaryKey = "nip_pegawai";
    protected $allowedFields = ["nama", "jabatan", "password", "status"];
    protected $useTimestamps = false;
}
