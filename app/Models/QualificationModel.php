<?php

namespace App\Models;

use CodeIgniter\Model;

class QualificationModel extends Model
{
    protected $table = 'qualification';
    protected $allowedFields = ['class10', 'class12', 'graduation', 'post_graduation', 'Education_gap'];
    public function getqualification()
    {
        return $this->orderBy('id')->findAll();
    }
}
