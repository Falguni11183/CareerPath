<?php

namespace App\Controllers;

use App\Models\UserModel;

class Profile extends BaseController
{
    public function index()
    {
        $userModel = new UserModel();

        $user = $userModel->find(session()->get('user_id'));

        return view('profile',[
            'user'=>$user
        ]);
    }

    public function edit()
    {
        $userModel = new UserModel();

        $user = $userModel->find(session()->get('user_id'));

        return view('edit_profile',[
            'user'=>$user
        ]);
    }

    public function update()
    {
        $userModel = new UserModel();

        $id = session()->get('user_id');

        $userModel->update($id,[

            'full_name'=>$this->request->getPost('full_name'),

            'email'=>$this->request->getPost('email'),

            'phone'=>$this->request->getPost('phone'),

            'gender'=>$this->request->getPost('gender'),

            'qualification'=>$this->request->getPost('qualification'),

            'location'=>$this->request->getPost('location')

        ]);

        return redirect()->to('/profile');
    }
}