<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\BarangModel;

class Barang extends ResourceController

{

    public function __construct()
    {
        $this->session = session();
        $this->model = new \App\Models\BarangModel();
    }


    public function index()
    {

        if ($this->session->get('status') == 'admin' || $this->session->get('status') !== 'bendahara') {
            //$dataProduct = $this->model->findAll();
            // return view('pages/barang', ['produk' => $dataProduct]);
            return view('pages/barang');
        } else {
            return redirect()->to('/');
        }
    }
    public function new()
    {
        return view('pages/tambah_barang');
    }

    public function create()
    {
        $this->model->insert([

            'kode_barang' => $this->request->getVar('kode_barang'),
            'nama' => $this->request->getVar('nama'),
            'volume' => $this->request->getVar('volume'),
            'satuan' => $this->request->getVar('satuan'),
            'harga' => $this->request->getVar('harga'),
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil ditambahkan.');

        return redirect()->to('/barang');
    }


    public function edit($id_barang = null)
    {
        //Mengubah Data Produk Hukum
        $dataProduct = $this->model->where('id_barang', $id_barang)->first();
        return view('/pages/edit_barang', ['product' => $dataProduct]);
    }

    public function delete($id_barang = null)
    {
        //Menghapus Produk Hukum
        $this->model->delete($id_barang);

        return redirect()->to('/barang');
    }

    public function update($id_barang = null)
    {

        //Untuk Update
        //$dataProduct = $this->request->getPost();
        $this->model->where('id_barang', $id_barang)->set([
            'kode_barang' => $this->request->getVar('kode_barang'),
            'nama' => $this->request->getVar('nama'),
            'volume' => $this->request->getVar('volume'),
            'satuan' => $this->request->getVar('satuan'),
            'harga' => $this->request->getVar('harga')
        ])->update();

        session()->setFlashdata('pesan', 'Data Berhasil diubah.');
        return redirect()->to('/barang');
    }
}
