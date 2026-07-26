<?php

namespace App\Models;

use CodeIgniter\Model;

class ResultModel extends Model
{
    protected $table = 'results';

    protected $primaryKey = 'id';

    protected $allowedFields = [
        'user_id',
        'career_profile_id',
        'score'
    ];

}