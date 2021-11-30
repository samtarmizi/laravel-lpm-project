<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\Todo;

class TodoPolicy
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

    public function lihat(User $user, Todo $todo)
    {
        return $user->id == $todo->user_id;
    }

    public function edit(User $user, Todo $todo)
    {
        return $user->id == $todo->user_id;
    }

    public function delete(User $user, Todo $todo)
    {
        return $user->id == $todo->user_id;
    }
}
