<?php

namespace App\Controllers;
use App\Models\Versenyzomodel;

class Home extends BaseController
{
    public function index()
    {
        if($this->isLogin()){
            return view('home');
        }else{
            return view('login');
        }
    }
    
    public function login(){
        $rules = [
            'email'         => 'required|min_length[4]|max_length[100]|valid_email',
            'password'      => 'required|min_length[4]|max_length[50]'
        ];
        
        if($this->validate($rules)){
        
            $session    = session();

            $versenyzoModel  = new Versenyzomodel();

            $email      = $this->request->getVar('email');
            $password   = $this->request->getVar('password');

            $data = $versenyzoModel->where('email', $email)->first();
            
            if($data){
                $pass = $data['jelszo'];
                $authenticatePassword = password_verify($password, $pass);
                if($authenticatePassword){
                    $ses_data = [
                        'id'            => $data['id'],
                        'name'          => $data['vezeteknev'].' '.$data['utonev'],
                        'email'         => $data['email'],
                        'isLoggedIn'    => TRUE
                    ];

                    $session->set($ses_data);
                    return redirect()->to('/Quiz/index');

                }else{
                    $session->setFlashdata('msg', 'Password is incorrect.');
                    return redirect()->to('/Home/index');
                }
            }
        }else{
            $data['validation'] = $this->validator;
            echo view('login', $data);
        }
    }
    
    public function logout(){
        $session    = session();
        
        
    }
    
    public function generate($pass){
        print(password_hash($pass, PASSWORD_DEFAULT));
    }
}
