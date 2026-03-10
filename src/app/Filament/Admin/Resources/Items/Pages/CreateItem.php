<?php

declare(strict_types=1);

namespace App\Filament\Admin\Resources\Items\Pages;

use App\Filament\Admin\Resources\Items\ItemResource;
use Filament\Resources\Pages\CreateRecord;

final class CreateItem extends CreateRecord
{
    protected static string $resource = ItemResource::class;
}
