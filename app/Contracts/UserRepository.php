<?php

namespace App\Contracts;

interface UserRepository
{
    // public function count();
    public function findByID($id);
}
