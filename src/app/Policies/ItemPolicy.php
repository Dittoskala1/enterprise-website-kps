<?php

declare(strict_types=1);

namespace App\Policies;

use App\Models\Item;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Foundation\Auth\User as AuthUser;

final class ItemPolicy
{
    use HandlesAuthorization;

    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:Item');
    }

    public function view(AuthUser $authUser, Item $item): bool
    {
        return $authUser->can('View:Item');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:Item');
    }

    public function update(AuthUser $authUser, Item $item): bool
    {
        return $authUser->can('Update:Item');
    }

    public function delete(AuthUser $authUser, Item $item): bool
    {
        return $authUser->can('Delete:Item');
    }
}
