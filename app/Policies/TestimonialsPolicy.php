<?php

namespace App\Policies;

use App\User;
use App\Testimonials;
use Illuminate\Auth\Access\HandlesAuthorization;

class TestimonialsPolicy
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
     * Determine whether the user can view the testimonials.
     *
     * @param  \App\User  $user
     * @param  \App\Testimonials  $testimonials
     * @return mixed
     */
    public function view(User $user, Testimonials $testimonials)
    {
        //
    }

    /**
     * Determine whether the user can create testimonials.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->id == $article->user_id;
    }

    /**
     * Determine whether the user can update the testimonials.
     *
     * @param  \App\User  $user
     * @param  \App\Testimonials  $testimonials
     * @return mixed
     */
    public function update(User $user, Testimonials $testimonials)
    {
        //
    }

    /**
     * Determine whether the user can delete the testimonials.
     *
     * @param  \App\User  $user
     * @param  \App\Testimonials  $testimonials
     * @return mixed
     */
    public function delete(User $user, Testimonials $testimonials)
    {
        //
    }

    /**
     * Determine whether the user can restore the testimonials.
     *
     * @param  \App\User  $user
     * @param  \App\Testimonials  $testimonials
     * @return mixed
     */
    public function restore(User $user, Testimonials $testimonials)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the testimonials.
     *
     * @param  \App\User  $user
     * @param  \App\Testimonials  $testimonials
     * @return mixed
     */
    public function forceDelete(User $user, Testimonials $testimonials)
    {
        //
    }
}
