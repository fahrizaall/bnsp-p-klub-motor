<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use CodeIgniter\API\ResponseTrait;

class Auth extends BaseController
{
    use ResponseTrait;
    public function __construct()
    {
        $this->session = \Config\Services::session();
    }
    
    public function login()
    {
        $user = new UserModel();

        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        $data = $user->where('email', $email)->orWhere('username', $email)->first();

        if(!$data) {
          $this->session->setFlashdata('error', 'anda belum terdaftar');
            return redirect()->to('/auth/login');
        }
        
        if(!password_verify($password, $data['password'])) {
            $this->session->setFlashdata('error', 'email atau password salah');
            return redirect()->to('/auth/login');
        }

        $userData = [
            'user_email' => $data['email'],
            'user_username' => $data['username'],
        ];


        $this->session->set($userData);
        return redirect()->to('/');
    }

    public function signup() {
        $user = new UserModel();
        
        $formData = [
          'username' => $this->request->getVar('username'),
          'email' => $this->request->getVar('email'),
          'password' => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT),
        ];
        
        if($user->isEmailRegistered($formData['email'])) {
            if(!$user->save($formData)) dd($user->errors());
    
            $userData = [
                'user_username' => $formData['username'],
                'user_email' => $formData['email']
                
            ];
    
            $this->session->set($userData);
            return redirect()->to('/');
        }
        
        $this->session->setFlashdata('error', 'email telah terdaftar');
        return redirect()->to('/auth/signup');
    }

    public function logout() {
        $this->session->destroy();

        return redirect()->to('auth/login');
    }
}
