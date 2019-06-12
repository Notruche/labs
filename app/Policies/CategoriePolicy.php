<?php

namespace App\Policies;

use App\User;
use App\Categorie;
use Illuminate\Auth\Access\HandlesAuthorization;

class CategoriePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the categorie.
     *
     * @param  \App\User  $user
     * @param  \App\Categorie  $categorie
     * @return mixed
     */

    public function before($user, $ability){
        if($user->isAdmin()){
            return true;
        }
    }

    public function view(User $user, Categorie $categorie)
    {
        return true;
    }

    /**
     * Determine whether the user can create categories.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        if($user->isEditor()){
            return true;
        }
    }

    /**
     * Determine whether the user can update the categorie.
     *
     * @param  \App\User  $user
     * @param  \App\Categorie  $categorie
     * @return mixed
     */
    public function update(User $user, Categorie $categorie)
    {
        return $user->id == $categorie->user_id;
    }

    /**
     * Determine whether the user can delete the categorie.
     *
     * @param  \App\User  $user
     * @param  \App\Categorie  $categorie
     * @return mixed
     */
    public function delete(User $user, Categorie $categorie)
    {
        return $user->id == $categorie->user_id;
    }

    /**
     * Determine whether the user can restore the categorie.
     *
     * @param  \App\User  $user
     * @param  \App\Categorie  $categorie
     * @return mixed
     */
    public function restore(User $user, Categorie $categorie)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the categorie.
     *
     * @param  \App\User  $user
     * @param  \App\Categorie  $categorie
     * @return mixed
     */
    public function forceDelete(User $user, Categorie $categorie)
    {
        //
    }
}
