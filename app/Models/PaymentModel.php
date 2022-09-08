<?php

namespace App\Models;

use CodeIgniter\Model;

class PaymentModel extends Model
{
    protected $table = 'payment';
    protected $allowedFields = ['number', 'name', 'expiry', 'cvv'];

    public function getpayments()
    {
        return $this->orderBy('id')->findAll();
    }
}
