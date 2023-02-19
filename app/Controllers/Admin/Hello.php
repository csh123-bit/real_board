<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\BaseModel;

class Hello extends BaseController
{
    public function index()
    {
        $test = new BaseModel();

        $testdata = $test->get()->getResultArray();

        print_r($testdata);

        return 'Hello World!';
    }
}
