<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table = 'users';
    protected $allowedFields = ['username','email'];

    public function getUsers($id = false)
    {

        if($id === false){
            return $this->findAll();
        } else {
            return $this->where(['id' => $id])->first(); 
        }
    }

    public function getUsername($id)
    {
        $db = db_connect();
        $db->query('SELECT username FROM users WHERE id = $id');
    }
}