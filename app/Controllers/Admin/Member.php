<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\UserModel;

class Member extends BaseController
{
    public function index()
    {    
        return view ('admin/template/header').view('admin/member').view('admin/template/footer');
    }
}
