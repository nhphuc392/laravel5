<?php

namespace App\Policies;

use App\User;
use App\articles;

use Illuminate\Auth\Access\HandlesAuthorization;

class ArticlesPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function store1(User $user)
    {
        return $user->admin;
    }
}
