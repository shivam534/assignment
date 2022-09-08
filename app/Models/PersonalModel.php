<?php

namespace App\Models;

use CodeIgniter\Model;

class PersonalModel extends Model
{
    protected $table = 'personal';
    protected $allowedFields = ['name', 'dob', 'gender', 'number', 'address', 'code', 'email'];
    public function getrecord()
    {
        return $this->orderBy('id')->findAll();
    }
}
