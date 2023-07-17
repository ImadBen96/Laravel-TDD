<?php

namespace App\Policies;

use App\Models\User;

class BookPolicy
{

    public function create(User $user) {
        return $user->role === "Librarian";
    }
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }
}
