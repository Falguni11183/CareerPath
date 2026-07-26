<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function saveRegister()
    {
        $userModel = new UserModel();

        $data = [
            'full_name' => $this->request->getPost('full_name'),
            'email'     => $this->request->getPost('email'),
            'password'  => password_hash(
                $this->request->getPost('password'),
                PASSWORD_DEFAULT
            )
        ];

        $userModel->insert($data);

        return redirect()->to('/login')
            ->with('success', 'Registration Successful!');
    }

    public function authenticate()
    {
        $userModel = new UserModel();

        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $user = $userModel->where('email', $email)->first();

        if ($user && password_verify($password, $user['password'])) {

            session()->set([
                'user_id'   => $user['id'],
                'full_name' => $user['full_name'],
                'logged_in' => true
            ]);

            return redirect()->to('/dashboard');

        } else {

            return redirect()->back()->with('error', 'Invalid Email or Password');

        }
    }

    public function dashboard()
{
    if (!session()->get('logged_in')) {
        return redirect()->to('/login');
    }

    $db = \Config\Database::connect();

    $userId = session()->get('user_id');

    // Latest Result
    $latestResult = $db->table('results r')
        ->select('r.score, c.career_name, c.description')
        ->join('career_profiles c', 'c.id = r.career_profile_id')
        ->where('r.user_id', $userId)
        ->orderBy('r.id', 'DESC')
        ->get()
        ->getRowArray();

    // Assessment Count
    $assessmentCount = $db->table('results')
        ->where('user_id', $userId)
        ->countAllResults();


    $data = [
    'latestResult' => $latestResult,
    'assessmentCount' => $assessmentCount
];

    return view('dashboard', $data);
}

    public function logout()
{
    session()->destroy();

    return redirect()->to(base_url('/'));
}
}