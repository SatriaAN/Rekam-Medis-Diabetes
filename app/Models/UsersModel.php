<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table = 'users';
    protected $allowedFields = ['username','email','telegram_id'];

    public function getUsers($id = false)
    {

        if($id === false){
            return $this->select('users.id ,username, email, users.telegram_id, gs.group_id, g.name group_name')
        ->join('auth_groups_users gs', 'users.id = gs.user_id')
        ->join('auth_groups g', ' g.id = gs.group_id')
        ->findAll();
        } else {
            return $this->where(['id' => $id])->first(); 
        }
    }
    
    public function getRole() {
        return $this->select('users.id ,username, email, users.telegram_id, gs.group_id, g.name group_name')
        ->join('auth_groups_users gs', 'users.id = gs.user_id')
        ->join('auth_groups g', ' g.id = gs.group_id')
        ->findAll();
    }
}