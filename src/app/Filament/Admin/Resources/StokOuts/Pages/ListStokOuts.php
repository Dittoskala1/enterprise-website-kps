<?php

declare(strict_types=1);

namespace App\Filament\Admin\Resources\StokOuts\Pages;

use App\Filament\Admin\Resources\StokOuts\StokOutResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

final class ListStokOuts extends ListRecords
{
    protected static string $resource = StokOutResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
