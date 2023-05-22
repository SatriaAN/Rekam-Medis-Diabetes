<?php

namespace App\Controllers;
use App\Models\DashboardModel;


class Dashboard extends BaseController
{

    protected $dashboardModel;
    protected $session;

    public function __construct()
    {
        $this->dashboardModel = new DashboardModel();
        $this->session = session();
    }

    public function index()
    {
        // $dashboard =  $this->dashboardModel->findAll();
        $data = [
            'menu' => 'dashboard',
            'dashboard' => $this->dashboardModel->get_report()
        ];

        return view('dashboard/index',$data);
    }

    public function create()
    {  
        $data = [
            'menu' => 'dashboard',
            'validation' => \Config\Services::validation(),
            'pasien' => $this->dashboardModel->allPasien()
        ];

        return view('dashboard/tambah_dashboard', $data);
    }

    public function store()
    {
   
        $nama = $this->request->getVar('nama');
        $gulaDarahPuasa = $this->request->getVar('gulaDarahPuasa');
        $gulaDarahSewaktu = $this->request->getVar('gulaDarahSewaktu');
        $tanggal = $this->request->getVar('tanggal');
        
        // $rules = [
        //     'gulaDarahPuasa' => 'required|max_length[3]',
        //     'gulaDarahSewaktu'  => 'required|max_length[3]'
        // ];
        
        // if (! $this->validate($rules))
        // {
        //     session()->setFlashdata('error', $this->validator->listErrors());
        //     return redirect()->back()->withInput();
        // } 

        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'gulaDarahPuasa' => [
                'rules' => 'required|max_length[4]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'max_length' => 'Maksimal 4 angka'
                ]
            ],
            'gulaDarahSewaktu' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        } else {
            print_r($this->request->getVar());
        }

        $data = [
            'pasien_idpasien' => $nama,
            'gula_darah_puasa' => $gulaDarahPuasa,
            'gula_darah_sewaktu' => $gulaDarahSewaktu,
            'tanggal' => $tanggal,
            // 'pasien' => $this->dashboardModel->allPasien()
        ];
        $this->dashboardModel->save($data);
        $this->session->setFlashdata('pesan','Data Diabetes Pasien Berhasil Ditambahkan');
        return redirect()->to('/dashboard');
    }

    public function edit($id) {
        $data = [
            'dashboard' => $this->dashboardModel->getDashboard($id),
            'pasien' => $this->dashboardModel->allPasien(),
            'menu' => 'dashboard',
        ];
        return view('dashboard/edit_dashboard', $data);
    }

    public function update()
    {
        $nama = $this->request->getVar('nama');
        $gulaDarahPuasa = $this->request->getVar('gulaDarahPuasa');
        $gulaDarahSewaktu = $this->request->getVar('gulaDarahSewaktu');
        $tanggal = $this->request->getVar('tanggal');

        $data = [
            'pasien_idpasien' => $nama,
            'gula_darah_puasa' => $gulaDarahPuasa,
            'gula_darah_sewaktu' => $gulaDarahSewaktu,
            'tanggal' => $tanggal,
            // 'pasien' => $this->dashboardModel->allPasien()
        ];

        $this->dashboardModel->save($data);
        $this->session->setFlashdata('pesan','Data Diabetes Pasien Berhasil Diubah');
        return redirect()->to('/dashboard');
    }

    public function delete($id)
    {
        $this->dashboardModel->delete($id);
        $this->session->setFlashdata('pesan','Data Pasien Berhasil Dihapus');
        return redirect()->to('/dashboard');
    }


}