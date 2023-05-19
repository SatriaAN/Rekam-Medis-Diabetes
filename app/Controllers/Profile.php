<?php

namespace App\Controllers;

class Profile extends BaseController
{
    public function index()
    {

        $data = [
            'menu' => 'profile'
        ];

        return view('profile/index',$data);
    }
}