<?php

namespace App\Models;

use CodeIgniter\Model;

class SubscriberModel extends Model
{
    protected $table            = 'subscribers';
    protected $allowedFields    = [
        'email_address','date','time'
    ];
    protected $returnType       = 'array';
    protected $useTimestamps = false;
}
