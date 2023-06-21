<?php

namespace App\Controllers;

use App\Models\UsersModel;

class Users extends BaseController
{
    protected $usersModel;
    protected $session;
    
    public function __construct()
    {
        $this->usersModel = new UsersModel();
        $this->session = session();
    }

    public function index()
    {

        $data = [
            'title' => 'Users',
            'users' => $this->usersModel->getUsers(),
            'role' => $this->usersModel->getRole(),
            'menu' => 'users',
        ];

        return view('users/index',$data);
    }

    public function edit($id) {
        $data = [
            'user' => $this->usersModel->getUsers($id),
            'menu' => 'users',
        ];
        return view('users/edit_user', $data);
    }

    public function update()
    {
        $id = $this->request->getVar('kode');
        $username = $this->request->getVar('username');
        $email = $this->request->getVar('email');
        $user_id = $this->request->getVar('user_id');

        $data = [
            'id' => $id,
            'username' => $username,
            'email' => $email,
            'user_id' => $user_id
        ];

        $this->usersModel->save($data);
        $this->session->setFlashdata('pesan','Data Users Berhasil Diubah');
        return redirect()->to('/users');
    }

    public function delete($id)
    {
        $this->usersModel->delete($id);
        $this->session->setFlashdata('pesan','Data Users Berhasil Dihapus');
        return redirect()->to('/users');
    }

 
}