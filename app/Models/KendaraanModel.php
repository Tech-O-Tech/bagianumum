<?php

namespace App\Models;

use CodeIgniter\Model;

class KendaraanModel extends Model
{
    protected $table      = 'tb_kendaraan';
    protected $primaryKey = 'id_kendaraan';
    protected $returnType = "object";
    protected $allowedFields        = [
        "no_registrasi", "nama_pemilik", "alamat", "merk", "tipe", "jenis", "model", "tahun_pembuatan", "isi_silinder", "no_rangka",
        "no_mesin", "warna", "bahan_bakar", "warna_tnkb", "no_bpkb", "kode_lokasi", "foto_stnk", "foto_kendaraan", "pinjam_pakai"
    ];

    public function getProduk($id_kendaraan = false)
    {
        if ($id_kendaraan = false) {
            return $this->findAll();
        }

        return $this->where(['id_kendaraan' => $id_kendaraan])->first();
    }
}
