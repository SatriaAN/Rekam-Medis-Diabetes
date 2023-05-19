<?php

namespace App\Controllers;

use App\Models\UsersModel;

class Users extends BaseController
{
    protected $usersModel;
    
    public function __construct()
    {
        $this->usersModel = new UsersModel();
    }

    public function index()
    {

        $users = $this->usersModel->findAll();
  
        $data = [
            'title' => 'Users',
            'users' => $users,
            'menu' => 'users'
        ];

        return view('users/index',$data);
    }

    public function get_username()
    {

        $users = $this->usersModel->findAll();
  
        $data = [
            'users' => $users,
            'menu' => 'users'
        ];

        return view('layout/template',$data);
    }

}