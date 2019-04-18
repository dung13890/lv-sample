<?php

namespace App\Repositories;

use App\Contracts\UserRepository;
use App\Eloquent\User;

class EloquentUserRepository implements UserRepository
{
    public $users;

    public function __construct(User $users)
    {
        $this->users = $users;
    }

    // public function count()
    // {
    //     return 12;
    // }

    public function findByID($id)
    {
        return $this->users->find($id);
    }
}
