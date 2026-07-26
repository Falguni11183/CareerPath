<?php

namespace App\Controllers;

class AdminAuth extends BaseController
{

    public function login()
    {
        return view('admin/login');
    }


    public function checkLogin()
    {
        $db = \Config\Database::connect();


        $username = $this->request->getPost('username');

        $password = $this->request->getPost('password');


        $admin = $db->table('admin')
            ->where('username',$username)
            ->where('password',$password)
            ->get()
            ->getRowArray();



        if($admin)
        {

            session()->set([
                'admin_id'=>$admin['id'],
                'admin_login'=>true
            ]);


            return redirect()->to('/admin/dashboard');
        }
        else
        {

            return redirect()
            ->back()
            ->with('error','Invalid Login');

        }

    }



    public function logout()
{
    session()->destroy();

    return redirect()->to(base_url('/'));
}


}
