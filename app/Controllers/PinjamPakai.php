<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\KendaraanModel;

class PinjamPakai extends ResourceController

{

    public function __construct()
    {
        $this->session = session();
        $this->model = new \App\Models\KendaraanModel();
    }
    public function pdam()
    {
        return view('pages/pdam');
    }
    public function home()
    {
        return view('pages/index');
    }
}
