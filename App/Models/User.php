<?php

namespace App\Models;

use System\BuildQueryTrait;
use System\Model;

class User extends Model
{
    use BuildQueryTrait;

    public function getAllUsers()
    {
        return $this->select('users', ['id', 'first_name']);
    }
}
