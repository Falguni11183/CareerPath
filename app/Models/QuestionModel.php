<?php

namespace App\Models;

use CodeIgniter\Model;

class QuestionModel extends Model
{
    protected $table = 'questions';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'question',
        'category',
        'option_a',
        'option_b',
        'option_c',
        'option_d'
    ];

    public function getAllQuestions()
    {
        return $this->orderBy('id', 'ASC')->findAll();
    }
}