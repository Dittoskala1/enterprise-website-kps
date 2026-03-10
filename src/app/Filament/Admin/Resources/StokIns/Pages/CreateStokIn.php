<?php

declare(strict_types=1);

namespace App\Filament\Admin\Resources\StokIns\Pages;

use App\Filament\Admin\Resources\StokIns\StokInResource;
use Filament\Resources\Pages\CreateRecord;

final class CreateStokIn extends CreateRecord
{
    protected static string $resource = StokInResource::class;
}
