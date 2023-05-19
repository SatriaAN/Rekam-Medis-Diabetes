<?php

namespace App\Models;

use CodeIgniter\Model;

class DashboardModel extends Model
{
    protected $table = ['report'];
    protected $primaryKey = 'idreport';
    
    public function get_report()
    {
        return $this->db->table('report')
        ->join('pasien','pasien.idpasien = report.pasien_idpasien')
        ->get()->getResultArray();
    }
}