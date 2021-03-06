<?php

namespace App\Policies;

use App\User;
use App\Newsletter;
use Illuminate\Auth\Access\HandlesAuthorization;

class NewsletterPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the newsletter.
     *
     * @param  \App\User  $user
     * @param  \App\Newsletter  $newsletter
     * @return mixed
     */
    public function view(User $user, Newsletter $newsletter)
    {
        //
    }

    /**
     * Determine whether the user can create newsletters.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the newsletter.
     *
     * @param  \App\User  $user
     * @param  \App\Newsletter  $newsletter
     * @return mixed
     */
    public function update(User $user, Newsletter $newsletter)
    {
        //
    }

    /**
     * Determine whether the user can delete the newsletter.
     *
     * @param  \App\User  $user
     * @param  \App\Newsletter  $newsletter
     * @return mixed
     */
    public function delete(User $user, Newsletter $newsletter)
    {
        //
    }

    /**
     * Determine whether the user can restore the newsletter.
     *
     * @param  \App\User  $user
     * @param  \App\Newsletter  $newsletter
     * @return mixed
     */
    public function restore(User $user, Newsletter $newsletter)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the newsletter.
     *
     * @param  \App\User  $user
     * @param  \App\Newsletter  $newsletter
     * @return mixed
     */
    public function forceDelete(User $user, Newsletter $newsletter)
    {
        //
    }
}
