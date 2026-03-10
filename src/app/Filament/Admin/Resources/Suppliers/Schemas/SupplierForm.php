<?php

declare(strict_types=1);

namespace App\Filament\Admin\Resources\Suppliers\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

final class SupplierForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                TextInput::make('name')
                    ->label('Nama Supplier')
                    ->required()
                    ->maxLength(255),

                TextInput::make('phone')
                    ->label('No. Telepon')
                    ->tel()
                    ->maxLength(20),

                TextInput::make('email')
                    ->email()
                    ->maxLength(255),

                Textarea::make('address')
                    ->label('Alamat')
                    ->rows(3),
            ]);
    }
}
