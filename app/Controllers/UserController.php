<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\ProductModel;

class UserController extends BaseController
{
    public function index()
    {
        if(!session()->get('isLoggedIn')){
            return redirect()->to('/signin');
        }
        else{
            $product = new ProductModel();
            $data = [
                'product' => $product->findAll(),
            ];
            return view('admin', $data);
        }
    }
    public function productview()
    {
        if(!session()->get('isLoggedIn')){
            return redirect()->to('/signin');
        }
        else{
            $product = new ProductModel();
            $data = [
                'product' => $product->findAll(),
            ];
            return view('productview', $data);
        }
    }

    public function adminview()
    {
        if(!session()->get('isLoggedIn')){
            return redirect()->to('/signin');
        }
        else{
            $product = new ProductModel();
            $data = [
                'product' => $product->findAll(),
            ];
            return view('admin', $data);
        }
    }

    public function registerview(){
        helper(['form']);
        $data = [];
        echo view('signup', $data);
    }
    
    public function register()
    {
        helper(['form']);
        $rules = [
            'username' => 'required|min_length[4]|max_length[100]|is_unique[login.username]',
            'email' => 'valid_email|is_unique[login.email]',
            'password' => 'required|min_length[4]|max_length[50]',
            'confirmpassword' => 'matches[password]'
        ];
        if($this->validate($rules)){
            $userModel = new UserModel();
            $data = [
                'username' => $this->request->getVar('username'),
                'email' => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                'usertype' => $this->request->getVar('usertype')
            ];
            $userModel->save($data);   
            return redirect()->to('/signin');
        }
        else{
            $data['validation'] = $this->validator;
            echo view('signup', $data);
        }
    }

    public function Login(){
        session()->remove(['id', 'username', 'isLoggedIn', 'usertype']);
        helper(['form']);
        echo view('signin');
    }

    public function LoginAuth()
    {
        $session= session();
        $userModel = new UserModel();

        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        $data = $userModel->where('username', $username)->first();

        if($data){
            $pass = $data['password'];
            $authenticatePassword = password_verify($password, $pass); 

            if($authenticatePassword){
                $ses_data = [ 
                    'id' => $data['id'],
                    'username' => $data['username'],
                    'isLoggedIn' => TRUE,
                    'usertype' => $data['usertype'],
                ];
                $session->set($ses_data);

                if($data['usertype'] === 'admin'){
                    return redirect()->to('/admin');
                } 
                else if($data['usertype'] === 'user'){
                    return redirect()->to('/index');
                }
            }
            else{
                $session->setFlashdata('msg', 'Password is incorrect.');
                return redirect()->to('/signin');
            }
        }
            else{
                $session->setFlashdata('msg', 'Username does not exist.');
                return redirect()->to('/signin');
            }
        }
}
