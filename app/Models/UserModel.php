<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = "bo_user";
    protected $primaryKey = "id_user";
    protected $allowedFields = ["nama", "nip", "jabatan", "password", "status"];
    protected $useTimestamps = false;
}
