<?php

namespace App\Controllers;

use App\Models\PasienModel;

class Pasien extends BaseController
{
    protected $pasienModel;
    
    public function __construct()
    {
        $this->pasienModel = new PasienModel();
    }

    public function index()
    {

        $data = [
            'title' => 'Daftar Pasien',
            'pasien' => $this->pasienModel->getPasien(),
            'menu' => 'pasien'
        ];

        return view('pasien/index',$data);
    }

    public function create()
    {
        helper('form');
        $data = [
            'menu' => 'pasien'
        ];

        return view('pasien/tambah_pasien',$data);
    }

    public function simpandata()
    {
        $nama = $this->request->getVar('nama');
        $email = $this->request->getVar('email');
        $nomorHp = $this->request->getVar('nomorHp');
        $umur = $this->request->getVar('umur');
        $jenisKelamin = $this->request->getVar('jenisKelamin');
        $alamat = $this->request->getVar('alamat');

        $data = [
            'nama' => $nama,
            'email' => $email,
            'no_hp' => $nomorHp,
            'umur' => $umur,
            'jenis_kelamin' => $jenisKelamin,
            'alamat' => $alamat
        ];

        $this->pasienModel->save($data);
        return redirect()->to('/pasien');
    }

    public function edit($id) {
        $data = [
            'pasien' => $this->pasienModel->getPasien($id),
            'menu' => 'pasien',
        ];
        return view('pasien/edit_pasien', $data);
    }

    public function update()
    {
        $id = $this->request->getVar('kode');
        $nama = $this->request->getVar('nama');
        $email = $this->request->getVar('email');
        $nomorHp = $this->request->getVar('nomorHp');
        $umur = $this->request->getVar('umur');
        $jenisKelamin = $this->request->getVar('jenisKelamin');
        $alamat = $this->request->getVar('alamat');

        $data = [
            'idpasien' => $id,
            'nama' => $nama,
            'email' => $email,
            'no_hp' => $nomorHp,
            'umur' => $umur,
            'jenis_kelamin' => $jenisKelamin,
            'alamat' => $alamat
        ];

        $this->pasienModel->save($data);
        return redirect()->to('/pasien');
    }

    public function delete($id)
    {
        $this->pasienModel->delete($id);
        return redirect()->to('/pasien');
    }
}