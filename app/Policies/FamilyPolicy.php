<?php

namespace App\Policies;

use App\Models\Family;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class FamilyPolicy
{
   
    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        if ($user->tipo === 0) {
            return false;
        }else{
            return true;
        }
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Family $family): bool
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Family $family): bool
    {
        //
    }

  
}
