<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view ('client/template/header').view('client/client').view('client/template/footer');
    }
}
