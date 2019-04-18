<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;
use App\Contracts\UserRepository;

class ProfileCompose {

    /**
     * The user repository implementation.
     *
     * @var UserRepository
     */
    protected $users;

    /**
     * Create a new profile composer.
     *
     * @param UserRepository    $users
     * @return void
     */
    public function __construct(UserRepository $users)
    {
        $this->users = $users;
    }

    /**
     * Bind data to view.
     *
     * @param View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('count', $this->users->findByID(1));
    }
}
