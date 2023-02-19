<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\BoardModel;
use App\Models\BoardConfigModel;

class Board extends BaseController
{
    public function index()
    {
        $boardConfigModel = new BoardConfigModel();
        $boardConfigData = $boardConfigModel->get()->getResultArray();
        $data = array();
        $data['boardConfigData'] = $boardConfigData;
        //exit();
        
        return view ('admin/template/header').view('admin/board', $data).view('admin/template/footer');
    }

    public function add_board(){

        $boardConfigModel = new BoardConfigModel();

        $boardConfigInfo = $this->request->getPost();
        
        $validate = $this->validate([
            'boc_code' => [
                'rules'=>'required',
                'errors'=> ['required'=>'코드를 입력해주세요.'],
            ],
            'boc_name' => [
                'rules'=>'required',
                'errors'=> ['required'=>'게시판 이름을 입력해주세요.'],
            ],
            'boc_skin' => [
                'rules'=>'required',
                'errors'=> ['required'=>'게시판 스킨을 선택해 주세요.'],
            ],
            'boc_per_page' => [
                'rules'=>'required',
                'errors'=> ['required'=>'페이지를 선택해주세요.'],
            ],
        ]);

        if(!$validate){
            return view ('admin/template/header').view('admin/add_board').view('admin/template/footer');
        }else{
            if($boardConfigModel->save($boardConfigInfo)){
                $boardCreate = new BoardModel($boardConfigInfo['boc_name']);
                $boardCreate->createTable();
                return redirect()->to('/admin/board/');
            }
        }

        //return view ('admin/template/header').view('admin/add_board').view('admin/template/footer');
    }
}
