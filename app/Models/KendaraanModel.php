<?php

namespace App\Models;

use CodeIgniter\Model;

class KendaraanModel extends Model
{
    protected $table      = 'kendaraan';
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

    public function getKendaraan()
    {
        $query =  $this->db->table('kendaraan')
            ->join('jabatan', 'kendaraan.nama_pemilik = jabatan.id_jabatan')
            ->select('kendaraan.id_kendaraan, kendaraan.no_registrasi, jabatan.nama_jabatan, kendaraan.alamat, kendaraan.merk, kendaraan.tipe, kendaraan.jenis, kendaraan.model, kendaraan.tahun_pembuatan, kendaraan.isi_silinder, kendaraan.no_rangka, kendaraan.no_mesin, kendaraan.warna, kendaraan.bahan_bakar, kendaraan.warna_tnkb, kendaraan.no_bpkb, kendaraan.kode_lokasi, kendaraan.foto_stnk, kendaraan.foto_kendaraan, kendaraan.pinjam_pakai')
            ->get();
        return $query;
    }
}
