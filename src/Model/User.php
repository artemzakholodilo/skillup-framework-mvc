<?php

namespace App\Model;

/**
 * Class User
 */
class User extends Model
{
    protected function getFields()
    {
        return ['id', 'first_name', 'last_name'];
    }
}
