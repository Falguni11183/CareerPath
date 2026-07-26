<?php

namespace App\Models;

use CodeIgniter\Model;

class RoadmapModel extends Model
{
    protected $table = 'roadmaps';

    protected $primaryKey = 'id';

    protected $returnType = 'array';

    protected $allowedFields = [
    'career_type',
    'step_no',
    'title',
    'description',
    'duration',
    'course_link'
];

    public function getRoadmap($career)
    {
        return $this->where('career_type', $career)
                    ->orderBy('step_no', 'ASC')
                    ->findAll();
    }
}