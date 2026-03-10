<?php

declare(strict_types=1);

namespace App\Filament\Admin\Resources\StokIns\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

final class StokInForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('item_id')
                    ->label('Item')
                    ->relationship('item', 'name')
                    ->searchable()
                    ->required(),

                Select::make('supplier_id')
                    ->label('Supplier')
                    ->relationship('supplier', 'name')
                    ->searchable()
                    ->required(),

                TextInput::make('quantity')
                    ->numeric()
                    ->required()
                    ->minValue(1),

                DatePicker::make('date')
                    ->required()
                    ->default(now()),
            ]);
    }
}
