<?php

namespace App\Models;

use CodeIgniter\Model;

class PasienModel extends Model
{
    protected $table = 'pasien';
    protected $primaryKey = 'idpasien';
    protected $allowedFields = ['nama','email','umur','jenis_kelamin','alamat','no_hp'];

    public function getPasien($id = false)
    {

        if($id === false){
            return $this->findAll();
        } else {
            return $this->where(['idpasien' => $id])->first(); 
        }
    }

}