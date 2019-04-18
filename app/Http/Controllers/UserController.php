<?php

namespace App\Http\Controllers;

use App\Contracts\UserRepository;
// use App\Eloquent\User;

class UserController extends Controller
{
    /**
     * The user repository implementation.
     *
     * @var $users
     */
    protected $users;

    /**
     * Create a new controller instance.
     *
     * @param UserRepository    $users
     * @return void
     */
    public function __construct(UserRepository $users)
    {
        $this->users = $users;
    }

    /**
     * Show the profile for given user.
     *
     * @param int   $id
     * @return Response
     */
    public function show($id)
    {
        $user = $this->users->findByID($id);

        return view('user.profile', ['user' => $user]);
    }
}
