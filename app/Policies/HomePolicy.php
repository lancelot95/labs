<?php

namespace App\Policies;

use App\User;
use App\Home;
use Illuminate\Auth\Access\HandlesAuthorization;

class HomePolicy
{
    use HandlesAuthorization;
    public function before($user,$ability){
        if($user->isAdmin()){
            return true;
        }
        // else if($user->isEditor()){
        //     return true;
        // }
    }
    /**
     * Determine whether the user can view the home.
     *
     * @param  \App\User  $user
     * @param  \App\Home  $home
     * @return mixed
     */
    public function view(User $user, Home $home)
    {
        //
    }

    /**
     * Determine whether the user can create homes.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->id == $article->user_id;
    }

    /**
     * Determine whether the user can update the home.
     *
     * @param  \App\User  $user
     * @param  \App\Home  $home
     * @return mixed
     */
    public function update(User $user, Home $home)
    {
        return $user->id == $article->user_id;
    }

    /**
     * Determine whether the user can delete the home.
     *
     * @param  \App\User  $user
     * @param  \App\Home  $home
     * @return mixed
     */
    public function delete(User $user, Home $home)
    {
        //
    }

    /**
     * Determine whether the user can restore the home.
     *
     * @param  \App\User  $user
     * @param  \App\Home  $home
     * @return mixed
     */
    public function restore(User $user, Home $home)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the home.
     *
     * @param  \App\User  $user
     * @param  \App\Home  $home
     * @return mixed
     */
    public function forceDelete(User $user, Home $home)
    {
        //
    }
}
