<?php

declare(strict_types=1);

namespace App\Filament\Admin\Resources\StokOuts\Pages;

use App\Filament\Admin\Resources\StokOuts\StokOutResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

final class EditStokOut extends EditRecord
{
    protected static string $resource = StokOutResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
