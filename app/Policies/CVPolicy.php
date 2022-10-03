<?php

namespace App\Policies;

use App\Models\User;
use App\Models\CV;
use Illuminate\Auth\Access\HandlesAuthorization;

class CVPolicy
{
    use HandlesAuthorization;

    public function crudCV(User $user, CV $cv){
        return $user->id == $cv->user_id;
    }
}
