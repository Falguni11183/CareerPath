<?php

namespace App\Models;

use CodeIgniter\Model;

class RoadmapProgressModel extends Model
{
    protected $table = 'user_roadmap_progress';

    protected $primaryKey = 'id';

    protected $returnType = 'array';

    protected $allowedFields = [
        'user_id',
        'roadmap_id',
        'status',
        'completed_at'
    ];

    public function completedSteps($userId)
    {
        return $this->where('user_id', $userId)
                    ->where('status', 'Completed')
                    ->findAll();
    }

    public function markComplete($userId, $roadmapId)
    {
        $exists = $this->where('user_id', $userId)
                       ->where('roadmap_id', $roadmapId)
                       ->first();

        if ($exists) {

            return $this->update($exists['id'], [

                'status' => 'Completed',

                'completed_at' => date('Y-m-d H:i:s')

            ]);

        }

        return $this->insert([

            'user_id' => $userId,

            'roadmap_id' => $roadmapId,

            'status' => 'Completed',

            'completed_at' => date('Y-m-d H:i:s')

        ]);
    }
}