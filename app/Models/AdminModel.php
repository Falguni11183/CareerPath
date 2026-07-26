<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table = 'admin';
    protected $primaryKey = 'id';
 public function totalUsers()
{
    return $this->db->table('users')->countAllResults();
}
    

    public function totalQuestions()
    {
        return $this->db->table('questions')->countAllResults();
    }

    public function totalTests()
    {
        return $this->db->table('results')->countAllResults();
    }

    public function totalCareerProfiles()
    {
        return $this->db->table('career_profiles')->countAllResults();
    }

    public function careerWiseResults()
{
    return $this->db->query("
        SELECT cp.career_name, COUNT(r.id) AS total
        FROM results r
        JOIN career_profiles cp
        ON r.career_profile_id = cp.id
        GROUP BY cp.career_name
        ORDER BY total DESC
    ")->getResultArray();
}

}