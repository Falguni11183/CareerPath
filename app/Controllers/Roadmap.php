<?php

namespace App\Controllers;

use App\Models\RoadmapModel;
use App\Models\RoadmapProgressModel;

class Roadmap extends BaseController
{
    protected $roadmapModel;
    protected $progressModel;

    public function __construct()
    {
        $this->roadmapModel = new RoadmapModel();
        $this->progressModel = new RoadmapProgressModel();
    }

    public function index()
    {
        $session = session();

        // Login user id
        $userId = $session->get('user_id');

        // Assessment result
        $career = session()->get('career_type');

// जर assessment दिलेली नसेल तर default roadmap दाखव
if (empty($career)) {
    $career = 'Software Developer';
}

        $roadmap = $this->roadmapModel->getRoadmap($career);

        $completed = $this->progressModel
            ->where('user_id', $userId)
            ->where('status', 'Completed')
            ->findAll();

        $completedIds = [];

        foreach ($completed as $row) {
            $completedIds[] = $row['roadmap_id'];
        }

        $totalSteps = count($roadmap);
        $completedSteps = count($completedIds);

        $progress = 0;

        if ($totalSteps > 0) {
            $progress = round(($completedSteps / $totalSteps) * 100);
        }

        return view('roadmap',[
    'career'=>$career,
    'roadmap'=>$roadmap,
    'completedIds'=>$completedIds,
    'progress'=>$progress
]);
    }

    public function complete($roadmapId)
    {
        $userId = session()->get('user_id');

        $this->progressModel->markComplete($userId, $roadmapId);

        return redirect()->to('/roadmap');
    }
}