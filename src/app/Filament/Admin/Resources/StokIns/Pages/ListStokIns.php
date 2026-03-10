<?php

declare(strict_types=1);

namespace App\Filament\Admin\Resources\StokIns\Pages;

use App\Filament\Admin\Resources\StokIns\StokInResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

final class ListStokIns extends ListRecords
{
    protected static string $resource = StokInResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
