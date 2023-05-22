<?php

namespace App\Controllers;

use App\Models\PasienModel;
use Config\session;

class Pasien extends BaseController
{
    protected $pasienModel;    
    protected $session;
    public function __construct()
    {
        $this->pasienModel = new PasienModel();
        $this->session = \Config\Services::session();

    }

    public function index()
    {
        $data = [
            'title' => 'Daftar Pasien',
            'pasien' => $this->pasienModel->getPasien(),
            'menu' => 'pasien',
        ];
        return view('pasien/index',$data);
    }

    public function create()
    {  
        session();
        $data = [
            'menu' => 'pasien',
            'validation' => \Config\Services::validation()
        ];

        return view('pasien/tambah_pasien', $data);
    }
    
    public function simpandata()
    {
   
        $nama = $this->request->getVar('nama');
        $email = $this->request->getVar('email');
        $nomorHp = $this->request->getVar('nomorHp');
        $umur = $this->request->getVar('umur');
        $jenisKelamin = $this->request->getVar('jenisKelamin');
        $alamat = $this->request->getVar('alamat');
        
        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'email' => [
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'valid_email' => 'Format Email Harus Valid'
                ]
            ],
            'umur' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'nomorHp' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'alamat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ]
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        } else {
            print_r($this->request->getVar());
        }

        $data = [
            'nama' => $nama,
            'email' => $email,
            'no_hp' => $nomorHp,
            'umur' => $umur,
            'jenis_kelamin' => $jenisKelamin,
            'alamat' => $alamat,
        ];
        $this->pasienModel->save($data);
        $this->session->setFlashdata('pesan','Data Pasien Berhasil Ditambahkan');
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
        $this->session->setFlashdata('pesan','Data Pasien Berhasil Diubah');
        return redirect()->to('/pasien');
    }

    public function delete($id)
    {
        $this->pasienModel->delete($id);
        $this->session->setFlashdata('pesan','Data Pasien Berhasil Dihapus');
        return redirect()->to('/pasien');
    }
}