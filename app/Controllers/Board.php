<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\BoardModel;
use App\Models\BoardConfigModel;

class Board extends BaseController
{
    // public function index(){
    //     $boardModel = new BoardModel($boardName);
    //     $boardData = $boardModel->get()->getResultArray();

    //     print_r($boardData);
    //     exit();
        
    // }

    public function board($boardCode = ''){

        $boardConfigModel = new BoardConfigModel();
        $boardConfig = $boardConfigModel->where('boc_code', $boardCode)->get()->getRowArray();

        $boardModel = new BoardModel($boardCode);
        $boardData = $boardModel->get()->getResultArray();

        $data = array();
        $data['boardData'] = $boardData;
        $data['boardConfig'] = $boardConfig;

        return view ('client/template/header').view('client/board',$data).view('client/template/footer');
    }

    public function write($boardCode = '', $bod_idx = 0){

        $boardModel = new BoardModel($boardCode);
        $boardData = $boardModel->where('bod_idx',$bod_idx)->get()->getResultArray();

        $info = $this->request->getPost();

        $data = array();
        $data['boardData'] = $boardData;

        $validate = $this->validate([
            'board_title' => [
                'rules'=>'required',
                'errors'=> ['required'=>'제목을 입력해 주세요.'],
            ],
        ]);
        
        if(!$validate){
            if($bod_idx>0){
                return view ('client/template/header').view('/client/board_edit', $data).view('client/template/footer');
            }else{
                return view ('client/template/header').view('/client/board_edit').view('client/template/footer');
            }
            
        }else{
            
            $data = array();
            $data['bod_title'] = $info['board_title'];
            $data['bod_content'] = $info['board_content'];

            if($boardModel->save($data)){
                echo "저장 되었습니다.";
            }else{
                echo "저장 안됨";
            }
        }

        
        
        //return view ('client/template/header').view('/client/board_edit',$data).view('client/template/footer');
    }
}
