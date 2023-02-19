<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\UserModel;

class Admin extends BaseController
{
    protected $session;

    public function index()
    {
        

        if(isset($_SESSION['user_manager'])&&$_SESSION['user_manager']){
            return view ('admin/template/header').view('admin/admin').view('admin/template/footer');
        }

        $validate = $this->validate([
            'user_id' => [
                'rules'=>'required',
                'errors'=> ['required'=>'아이디를 입력해 주세요.'],
            ],
            'user_password' => [
                'rules'=>'required',
                'errors'=> ['required'=>'비밀번호를 입력해 주세요.'],
            ],
        ]);
        if(!$validate){
            return view('/admin/login');
        }else{
            $info = $this->request->getPost();
            if($info){
                $user = new UserModel();
                $userInfo = $user->where('usr_email', $info['user_id'])->get()->getRowArray();
                if(!empty($userInfo)){
                    if(password_verify($info['user_password'], $userInfo['usr_password'])){

                        $is_manager = false;
                        if($userInfo['usr_level']>=80){
                            $is_manager = true;
                        }
                        
                        $session = session();
                        $sessionData = [
                            'user_idx'        => $userInfo['usr_idx'],
                            'user_id'         => $userInfo['usr_email'],
                            'user_name'       => $userInfo['usr_name'],
                            'user_phonenumber'=> $userInfo['usr_phonenumber'],
                            'user_level'      => $userInfo['usr_level'],
                            'user_manager'    => $is_manager,
                        ];
                        $session->set($sessionData);

                        // print_r($_SESSION);
                        // exit();
                        

                        if(isset($_SESSION['user_manager'])&&$_SESSION['user_manager']){
                            return view ('admin/template/header').view('admin/admin').view('admin/template/footer');
                        }else{
                            echo "관리자 전용 페이지 입니다.";
                            exit();
                        }
                        
                    }else{
                        echo 'password wrong';
                        exit();
                    }
                }else{
                    echo 'id not exist';
                    exit();
                }
            }
            echo '<script>alert("아이디나 비밀번호를 확인해주세요.");
                window.location.href = "/admin/admin";
                </script>';
        }
        
        // return view ('admin/template/header').view('admin/admin').view('admin/template/footer');
    }
}
