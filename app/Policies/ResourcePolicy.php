<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Resource;
use Illuminate\Auth\Access\HandlesAuthorization;

class ResourcePolicy
{
    use HandlesAuthorization;
    
    public function viewAny(User $user)
    {
        return true; 
    }

    public function view(User $user, Resource $resource)
    {
        return true; 
    }

    public function create(User $user)
    {
        return false; 
    }

    public function update(User $user, Resource $resource)
    {
        return false;
    }

    public function delete(User $user, Resource $resource)
    {
        return false; 
    }

    public function restore(User $user, Resource $resource)
    {
        return false; 
    }

    public function forceDelete(User $user, Resource $resource)
    {
        return false; 
    }
}
