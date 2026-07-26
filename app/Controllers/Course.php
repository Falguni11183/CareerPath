<?php

namespace App\Controllers;

use App\Models\RoadmapModel;

class Course extends BaseController
{
    public function index($id)
    {
        $model = new RoadmapModel();

        $course = $model->find($id);

        if (!$course) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        return view('course', [
            'course' => $course
        ]);
    }
}