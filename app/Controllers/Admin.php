<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function login()
    {
        $AdminModel = new \App\Models\AdminModel();
        $login = $this->request->getPOst('login');
        if ($login) {
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');
            if ($username == '' or $password == '') {
                $err = "Username or Password cannot be empty!";
            }

            if (empty($err)) {
                $dataAdmin = $AdminModel->where("username", $username)->first();
                if ($dataAdmin == null) {
                    $err = "Invalid username or password!";
                } else if ($dataAdmin['password'] != $password) {
                    $err = "Invalid username or password!";
                }
            }

            if (empty($err)) {
                $sesiAdmin = [
                    'id' => $dataAdmin['id'],
                    'username' => $dataAdmin['username'],
                    'password' => $dataAdmin['password']
                ];
                session()->set($sesiAdmin);
                return redirect()->to('admin/index');
            }

            if ($err) {
                session()->setFlashdata('username', $username);
                session()->setFlashdata('error', $err);
                return redirect()->to('/');
            }
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }

    public function index()
    {
        $data = [
            'title' => 'Admin | SPK'
        ];

        return view('admin/adminhome', $data);
    }
}
