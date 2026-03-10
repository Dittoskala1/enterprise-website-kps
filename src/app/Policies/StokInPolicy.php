<?php

declare(strict_types=1);

namespace App\Policies;

use App\Models\StokIn;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Foundation\Auth\User as AuthUser;

final class StokInPolicy
{
    use HandlesAuthorization;

    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:StokIn');
    }

    public function view(AuthUser $authUser, StokIn $stokIn): bool
    {
        return $authUser->can('View:StokIn');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:StokIn');
    }

    public function update(AuthUser $authUser, StokIn $stokIn): bool
    {
        return $authUser->can('Update:StokIn');
    }

    public function delete(AuthUser $authUser, StokIn $stokIn): bool
    {
        return $authUser->can('Delete:StokIn');
    }
}
