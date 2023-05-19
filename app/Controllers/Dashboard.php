<?php

namespace App\Controllers;
use App\Models\DashboardModel;


class Dashboard extends BaseController
{

    protected $dashboardModel;

    public function __construct()
    {
        $this->dashboardModel = new DashboardModel();
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
}