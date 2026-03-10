<?php

declare(strict_types=1);

namespace App\Filament\Admin\Resources\StokOuts\Pages;

use App\Filament\Admin\Resources\StokOuts\StokOutResource;
use Filament\Resources\Pages\CreateRecord;

final class CreateStokOut extends CreateRecord
{
    protected static string $resource = StokOutResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['user_id'] = auth()->id();

        return $data;
    }
}
