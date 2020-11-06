<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

use App\Models\Queries\UserQuery; 

use App\Models\Corporation; 


class UserPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(User $user)
    {
        $userQuery = new UserQuery($user); 
        if($userQuery->hasSuperAdministrator()) {
            if(is_null(request()->corporation)) return false; 
            else return true; 
        }

        return true; 
    }

    public function view(User $user, User $model)
    {
        $userQuery = new UserQuery($user); 
        if($userQuery->hasSuperAdministrator()) return true; 

        if($userQuery->hasAdministrator()) {
            if(
                $user->corporations()->first()->name == 
                $model->corporations()->first()->name
            ) return true; 
            else return false; 
        }

        return $user->id == $model->id; 
    }

    public function create(User $user)
    {
        return false; 
    }

    public function update(User $user, User $model)
    {
        return $user->id == $model->id; 
    }

    public function delete(User $user, User $model)
    {
        return $user->id == $model->id; 
    }

    public function restore(User $user, User $model)
    {
        return false; 
    }

    public function forceDelete(User $user, User $model)
    {
        return false; 
    }
}
