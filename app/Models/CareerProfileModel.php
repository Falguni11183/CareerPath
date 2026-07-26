<?php

namespace App\Models;

use CodeIgniter\Model;

class CareerProfileModel extends Model
{
    protected $table = 'career_profiles';

    protected $primaryKey = 'id';

    protected $allowedFields = [
        'career_name',
        'description',
        'roadmap',
        'color_code'
    ];

    
}