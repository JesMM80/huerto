<?php

namespace App\Policies;

use App\Models\Siembra;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class SiembraPolicy
{
   
    public function create(User $user): bool
    {
        if ($user->sembrar == 0) {
            return false;
        }else{
            return true;
        }
    }

    
}
