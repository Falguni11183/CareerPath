<?php

namespace App\Controllers;

class Admin extends BaseController
{

    public function dashboard()
{
    $model = new \App\Models\AdminModel();

    $data = [
        'totalUsers'      => $model->totalUsers(),
        'totalQuestions'  => $model->totalQuestions(),
        'totalTests'      => $model->totalTests(),
        'totalProfiles'   => $model->totalCareerProfiles(),
        'careerStats'     => $model->careerWiseResults()
    ];

    return view('admin/dashboard', $data);
}
    public function questions()
{
    if(!session()->get('admin_login'))
    {
        return redirect()->to('/admin/login');
    }

    $db = \Config\Database::connect();

    $data['questions'] = $db->query("
    SELECT questions.*,career_profiles.career_name
    FROM questions
    JOIN career_profiles
    ON questions.career_profile_id=career_profiles.id
    ")->getResultArray();

    $data['profiles']=$db->table('career_profiles')->get()->getResultArray();

    return view('admin/questions',$data);
}
public function addQuestion()
{
    if (!session()->get('admin_login')) {
        return redirect()->to(base_url('admin/login'));
    }

    $db = \Config\Database::connect();

    $data['profiles'] = $db->table('career_profiles')->get()->getResultArray();

    return view('admin/add_question', $data);
}



public function saveQuestion()
{
    $db = \Config\Database::connect();

    $data = [
        'question' => $this->request->getPost('question'),
        'career_profile_id' => 1,
        'category' => 'General',

        'option_a' => '',
        'option_b' => '',
        'option_c' => '',
        'option_d' => '',

        'option1' => '',
        'score1'  => 0,

        'option2' => '',
        'score2'  => 0,

        'option3' => '',
        'score3'  => 0
    ];

    $db->table('questions')->insert($data);

    return redirect()->to(base_url('index.php/admin/questions'));
}
public function authenticate()
{
    $username = $this->request->getPost('username');
    $password = $this->request->getPost('password');

    $db = \Config\Database::connect();

    $admin = $db->table('admin')
        ->where('username', $username)
        ->where('password', $password)
        ->get()
        ->getRowArray();

    if ($admin) {

        session()->set([
            'admin_id' => $admin['id'],
            'admin_name' => $admin['username'],
            'admin_logged_in' => true
        ]);

        return redirect()->to('/admin/dashboard');

    }

    return redirect()->back()->with('error', 'Invalid Username or Password');
}
public function editQuestion($id)
{
    $db = \Config\Database::connect();

    $data['question'] = $db->table('questions')
        ->where('id', $id)
        ->get()
        ->getRowArray();

    $data['profiles'] = $db->table('career_profiles')->get()->getResultArray();

    return view('admin/edit_question', $data);
}
public function updateQuestion($id)
{
    $db = \Config\Database::connect();

    $data = [
        'question' => $this->request->getPost('question'),
        'career_profile_id' => $this->request->getPost('career_profile_id'),
        'category' => $this->request->getPost('category'),
        'option_a' => $this->request->getPost('option_a'),
        'option_b' => $this->request->getPost('option_b'),
        'option_c' => $this->request->getPost('option_c'),
        'option_d' => $this->request->getPost('option_d')
    ];

    $db->table('questions')
        ->where('id', $id)
        ->update($data);

    return redirect()->to(base_url('admin/questions'));
}
public function deleteQuestion($id)
{
    $db = \Config\Database::connect();

    $db->table('questions')
        ->where('id', $id)
        ->delete();

    return redirect()->to(base_url('admin/questions'));
}
public function careerProfiles()
{
    $db = \Config\Database::connect();

    $data['profiles'] = $db->table('career_profiles')
                           ->get()
                           ->getResultArray();

    return view('admin/career_profiles',$data);
}
public function addCareerProfile()
{
    if (!session()->get('admin_login')) {
        return redirect()->to(base_url('admin/login'));
    }

    return view('admin/add_career_profile');
}

public function saveCareerProfile()
{
    $db = \Config\Database::connect();

    $db->table('career_profiles')->insert([

        'career_name' => $this->request->getPost('career_name'),

        'description' => $this->request->getPost('description'),

        'roadmap' => $this->request->getPost('roadmap'),

        'color_code' => $this->request->getPost('color_code')

    ]);

    return redirect()->to(base_url('admin/career-profiles'));
}
public function editCareerProfile($id)
{
    $db = \Config\Database::connect();

    $data['profile'] = $db->table('career_profiles')
        ->where('id',$id)
        ->get()
        ->getRowArray();

    return view('admin/edit_career_profile',$data);
}

public function updateCareerProfile($id)
{
    $db = \Config\Database::connect();

    $data = [

        'career_name' => $this->request->getPost('career_name'),

        'description' => $this->request->getPost('description'),

        'roadmap' => $this->request->getPost('roadmap'),

        'color_code' => $this->request->getPost('color_code')

    ];

    $db->table('career_profiles')
       ->where('id', $id)
       ->update($data);

    return redirect()->to(base_url('admin/career-profiles'));
}
public function deleteCareerProfile($id)
{
    $db = \Config\Database::connect();

    $db->table('career_profiles')
       ->where('id', $id)
       ->delete();

    return redirect()->to(base_url('admin/career-profiles'));
}
public function users()
{
    $db = \Config\Database::connect();

    $data['users'] = $db->table('users')
                        ->select('id, full_name, email')
                        ->get()
                        ->getResultArray();

    return view('admin/users', $data);
}


public function deleteUser($id)
{
    $db = \Config\Database::connect();

    $db->table('users')
       ->where('id',$id)
       ->delete();

    return redirect()->to(base_url('admin/users'));
}
public function results()
{
    $db = \Config\Database::connect();

    $data['results'] = $db->query("
        SELECT 
        results.id,
        users.full_name,
        users.email,
        career_profiles.career_name,
        results.score

        FROM results

        JOIN users
        ON results.user_id = users.id

        JOIN career_profiles
        ON results.career_profile_id = career_profiles.id
    ")->getResultArray();


    return view('admin/results',$data);
}



public function deleteResult($id)
{
    $db = \Config\Database::connect();

    $db->table('results')
       ->where('id',$id)
       ->delete();

    return redirect()->to(base_url('admin/results'));
}

}
