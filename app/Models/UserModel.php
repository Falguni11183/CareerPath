<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';

    protected $primaryKey = 'id';

    protected $allowedFields = [
        'full_name',
        'email',
        'password',
        'phone',
        'gender',

'qualification',

'location',

'profile_photo'

    ];
    
}