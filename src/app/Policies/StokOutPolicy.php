<?php

declare(strict_types=1);

namespace App\Policies;

use App\Models\StokOut;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Foundation\Auth\User as AuthUser;

final class StokOutPolicy
{
    use HandlesAuthorization;

    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:StokOut');
    }

    public function view(AuthUser $authUser, StokOut $stokOut): bool
    {
        return $authUser->can('View:StokOut');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:StokOut');
    }

    public function update(AuthUser $authUser, StokOut $stokOut): bool
    {
        return $authUser->can('Update:StokOut');
    }

    public function delete(AuthUser $authUser, StokOut $stokOut): bool
    {
        return $authUser->can('Delete:StokOut');
    }
}
