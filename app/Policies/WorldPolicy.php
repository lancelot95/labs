<?php

namespace App\Policies;

use App\User;
use App\World;
use Illuminate\Auth\Access\HandlesAuthorization;

class WorldPolicy
{
    use HandlesAuthorization;
    public function before($user,$ability){
        if($user->isAdmin()){
            return true;
        }
        else if($user->isEditor()){
            return true;
        }
    }
    /**
     * Determine whether the user can view the world.
     *
     * @param  \App\User  $user
     * @param  \App\World  $world
     * @return mixed
     */
    public function view(User $user, World $world)
    {
        //
    }

    /**
     * Determine whether the user can create worlds.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->id == $article->user_id;
    }

    /**
     * Determine whether the user can update the world.
     *
     * @param  \App\User  $user
     * @param  \App\World  $world
     * @return mixed
     */
    public function update(User $user, World $world)
    {
        //
    }

    /**
     * Determine whether the user can delete the world.
     *
     * @param  \App\User  $user
     * @param  \App\World  $world
     * @return mixed
     */
    public function delete(User $user, World $world)
    {
        //
    }

    /**
     * Determine whether the user can restore the world.
     *
     * @param  \App\User  $user
     * @param  \App\World  $world
     * @return mixed
     */
    public function restore(User $user, World $world)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the world.
     *
     * @param  \App\User  $user
     * @param  \App\World  $world
     * @return mixed
     */
    public function forceDelete(User $user, World $world)
    {
        //
    }
}
