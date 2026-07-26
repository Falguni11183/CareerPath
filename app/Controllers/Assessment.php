<?php

namespace App\Controllers;

use App\Models\QuestionModel;
use App\Models\CareerProfileModel;
use App\Models\ResultModel;

class Assessment extends BaseController
{
    protected $questionModel;
    protected $careerModel;
    protected $resultModel;

    public function __construct()
    {
        $this->questionModel = new QuestionModel();
        $this->careerModel   = new CareerProfileModel();
        $this->resultModel   = new ResultModel();
    }

    // Show Assessment Page
    public function index()
    {
        if (!session()->get('logged_in')) {
            return redirect()->to('/login');
        }

        $data['questions'] = $this->questionModel
            ->orderBy('id', 'ASC')
            ->findAll();

        return view('assessment', $data);
    }

    // Submit Assessment
    public function submit()
{
    if (!session()->get('logged_in')) {
        return redirect()->to('/login');
    }

    $answers = $this->request->getPost('answer');

    if (empty($answers)) {
        return redirect()->back()->with('error', 'Please answer all questions.');
    }

    // Career Scores
    $score = [
        1 => 0, // Software Engineer
        2 => 0, // Business Analyst
        3 => 0, // Data Scientist
        4 => 0, // Project Manager
        5 => 0  // UI/UX Designer
    ];

    foreach ($answers as $questionId => $answer) {

        switch ($questionId) {

            case 1:
            case 3:
            case 5:
            case 8:
            case 10:
            case 12:
            case 15:

                if ($answer == 'A') {
                    $score[1]++;
                } elseif ($answer == 'B') {
                    $score[2]++;
                } elseif ($answer == 'C') {
                    $score[3]++;
                } else {
                    $score[5]++;
                }

                break;

            default:

                if ($answer == 'A') {
                    $score[4]++;
                } elseif ($answer == 'B') {
                    $score[2]++;
                } elseif ($answer == 'C') {
                    $score[3]++;
                } else {
                    $score[1]++;
                }
        }
    }

    arsort($score);

    $careerId = array_key_first($score);

    $career = $this->careerModel->find($careerId);

    if (!$career) {
        return redirect()->back()->with('error', 'Career profile not found.');
    }

    $highestScore = max($score);

    $percentage = round(($highestScore / 15) * 100);

    // Save Result
    $this->resultModel->insert([
        'user_id' => session()->get('user_id'),
        'career_profile_id' => $careerId,
        'score' => $percentage
    ]);

    $career['percentage'] = $percentage;

    session()->set('career', $career);

    return redirect()->to('/result');
}

    // Result Page
    public function result()
    {
        if (!session()->get('career')) {
            return redirect()->to('/assessment');
        }

        $data['career'] = session()->get('career');

        return view('result', $data);
    }
}