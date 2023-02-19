<?php

namespace App\Controllers\Client;
use App\Controllers\BaseController;
use App\Models\UserModel;

class Client extends BaseController
{
    protected $session;

    public function index()
    {
        return view ('client/template/header').view('client/client').view('client/template/footer');
    }

    public function signup(){
        //echo "넘어오나";
        //exit();
        $validate = $this->validate([
            'user_email' => [
                'rules'=>'required',
                'errors'=> ['required'=>'아이디를 입력해 주세요.'],
            ],
            'user_name' => [
                'rules'=>'required',
                'errors'=> ['required'=>'이름을 입력해 주세요.'],
            ],
            'user_password' => [
                'rules'=>'required',
                'errors'=> ['required'=>'비밀번호를 입력해 주세요.'],
            ],
            'user_phonenumber' => [
                'rules'=>'required',
                'errors'=> ['required'=>'전화번호를 입력해 주세요.'],
            ],
        ]);

        if(!$validate){
            return view ('client/template/header').view('client/register').view('client/template/footer');
        }else{
            $info =  $this->request->getPost();
            $password = password_hash($info['user_password'], PASSWORD_DEFAULT);
            $data = [
                'usr_id' => $info['user_email'],
                'usr_name' => $info['user_name'],
                'usr_password' => $password,
                'usr_email' => $info['user_email'],
                'usr_phonenumber' => $info['user_phonenumber'],
                'usr_address' => $info['user_address'],
                'usr_level' => 1,
            ];
            
            $userModel = new UserModel();
            $double_id = $userModel->where('usr_email',$info["user_email"])->get()->getRowArray();
            if($double_id){
                echo "아이디가 중복됩니다.";
                exit();
            }
            if($userModel->save($data)){
                return redirect()->to('/');;
            };
        }

        //return view ('client/template/header').view('client/register').view('client/template/footer');
    }

    public function signin(){

        
        return view ('client/template/header').view('client/login').view('client/template/footer');
    }

    public function register(){

        
    }

    public function signin_proc(){
        
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

                    echo 'logged in';
                    exit();
                }else{
                    echo 'password wrong';
                    exit();
                }
            }else{
                echo 'id not exist';
                exit();
            }
        }
        return redirect()->to("/client/client/signin");
    }
}
