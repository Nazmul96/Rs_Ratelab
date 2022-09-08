<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class User extends Entity
{
    protected $datamap = [];
    protected $dates   = ['updated_at', 'deleted_at'];
    protected $casts   = [];
}
