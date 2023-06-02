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
        $latestData = $this->dashboardModel->orderBy('idreport', 'DESC')->first();

        // Pass data ke view
        $data['dataBaruSistolik'] = $latestData ? $latestData['sistolik'] : null;
        $data['dataBaruDiastolik'] = $latestData ? $latestData['diastolik'] : null;
    
        $data['menu'] = 'dashboard';
        $data['dashboard'] = $this->dashboardModel->get_report();
    
        return view('dashboard/index', $data);
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
        $sistolik = $this->request->getVar('sistolik');
        $diastolik = $this->request->getVar('diastolik');
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
                    'required' => 'Gula Darah Puasa Harus diisi',
                    'max_length' => 'Maksimal 4 angka'
                ]
            ],
            'gulaDarahSewaktu' => [
                'rules' => 'required|max_length[4]',
                'errors' => [
                    'required' => 'Gula Darah Sewaktu Harus diisi',
                    'max_length' => 'Maksimal 4 angka'
                ]
            ],
            'sistolik' => [
                'rules' => 'required|max_length[3]',
                'errors' => [
                    'required' => 'Tekanan Darah Sistolik Harus diisi',
                    'max_length' => 'Maksimal 3 angka'
                ]
            ],
            'diastolik' => [
                'rules' => 'required|max_length[3]',
                'errors' => [
                    'required' => 'Gula Darah Sewaktu Harus diisi',
                    'max_length' => 'Maksimal 3 angka'
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
            'sistolik' => $sistolik,
            'diastolik' => $diastolik,
            'tanggal' => $tanggal,
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
        $id = $this->request->getVar('kode');
        $nama = $this->request->getVar('nama');
        $gulaDarahPuasa = $this->request->getVar('gulaDarahPuasa');
        $gulaDarahSewaktu = $this->request->getVar('gulaDarahSewaktu');
        $tanggal = $this->request->getVar('tanggal');
        $sistolik = $this->request->getVar('sistolik');
        $diastolik = $this->request->getVar('diastolik');

        $data = [
            'idreport' => $id,
            'pasien_idpasien' => $nama,
            'gula_darah_puasa' => $gulaDarahPuasa,
            'gula_darah_sewaktu' => $gulaDarahSewaktu,
            'tanggal' => $tanggal,
            'sistolik' => $sistolik,
            'diastolik' => $diastolik
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

    public function showChartReport()
    {
        $tahun = $this->request->getVar('tahun');
        $data_report =  $this->dashboardModel->getReport($tahun);
        // dd($data_report);

        $response = [
            'status' => true,
            'data' => $data_report
        ]; 

        echo json_encode($response);
    }

}