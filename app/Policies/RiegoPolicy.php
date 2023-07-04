<?php

namespace App\Policies;

use App\Models\Riego;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class RiegoPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        //
    }


    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Riego $riego): bool
    {
        if ($user->tipo == 1) {

            return true;
        }else{
            return false;
        }
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Riego $riego): bool
    {
        //
    }

    
}
