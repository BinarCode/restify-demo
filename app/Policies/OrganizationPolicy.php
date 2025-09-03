<?php

namespace App\Policies;

use App\Models\Organization;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class OrganizationPolicy
{
    use HandlesAuthorization;

    public function allowRestify(User $user = null): bool
    {
        return true;
    }

    public function show(User $user = null, Organization $model): bool
    {
        return true;
    }

    public function store(User $user = null): bool
    {
        return true;
    }

    public function storeBulk(User $user = null): bool
    {
        return true;
    }

    public function update(User $user = null, Organization $model): bool
    {
        return true;
    }

    public function updateBulk(User $user = null, Organization $model): bool
    {
        return true;
    }

    public function deleteBulk(User $user = null, Organization $model): bool
    {
        return true;
    }

    public function delete(User $user = null, Organization $model): bool
    {
        return true;
    }
}
