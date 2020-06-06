<?php

namespace App\Model;

trait CreationDate
{
    protected $createdAt;

    protected $updatedAt;

    public function setDefaultNickName()
    {
        $this->nickName = 'Hello from trait';
    }
}