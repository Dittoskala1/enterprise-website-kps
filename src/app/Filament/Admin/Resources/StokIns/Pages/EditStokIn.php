<?php

declare(strict_types=1);

namespace App\Filament\Admin\Resources\StokIns\Pages;

use App\Filament\Admin\Resources\StokIns\StokInResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

final class EditStokIn extends EditRecord
{
    protected static string $resource = StokInResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
