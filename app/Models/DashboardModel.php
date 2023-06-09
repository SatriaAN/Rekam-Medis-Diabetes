<?php

namespace App\Models;

use CodeIgniter\Model;

class DashboardModel extends Model
{
    protected $table = 'report';
    protected $primaryKey = 'idreport';
    protected $allowedFields = ['gula_darah_puasa','gula_darah_sewaktu','sistolik','diastolik','tanggal','pasien_idpasien'];
    
    public function get_report()
    {
        return $this->db->table('report')
        ->join('pasien','pasien.idpasien = report.pasien_idpasien')
        ->get()->getResultArray();
        // return $this->findAll();
    }

    public function getDashboard($id) 
    {
        if($id === false){
            return $this->findAll();
        } else {
            return $this->where(['idreport' => $id])->first(); 
        }
    }

    public function getPasienReport($id = false)
    {
        if($id === false){
            
        return $this->db->table('report')
        ->join('pasien','pasien.idpasien = report.pasien_idpasien')
        ->get()->getResultArray();
        } else {
            return $this->where(['idreport' => $id])->first(); 
        }
    }

    public function allPasien() {
        return $this->db->table('pasien')
        ->get()->getResultArray();
    }

    public function getReport($tahun)
    {
        return $this->db->table('report')
        ->select("MONTH(report.tanggal) bulan, report.gula_darah_puasa gulaDarahPuasa, report.gula_darah_sewaktu gulaDarahSewaktu, report.sistolik dataSistolik, report.diastolik dataDiastolik")
        ->where('YEAR(report.tanggal) ',$tahun)
        ->orderBy('MONTH(report.tanggal)')
        ->get()->getResultArray();
    }

}