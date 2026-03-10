<?php

declare(strict_types=1);

namespace App\Filament\Admin\Resources\Items\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

final class ItemForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                TextInput::make('name')
                    ->label('Item Name')
                    ->required()
                    ->maxLength(255),

                TextInput::make('category')
                    ->label('Category')
                    ->maxLength(255),

                TextInput::make('unit')
                    ->label('Unit')
                    ->required()
                    ->maxLength(50),

                Select::make('warehouse_id')
                    ->label('Warehouse')
                    ->relationship('warehouse', 'name')
                    ->searchable()
                    ->preload()
                    ->required(),

                TextInput::make('minimum_stok')
                    ->label('Minimum Stock')
                    ->numeric()
                    ->default(0)
                    ->required(),

                // Stok ditampilkan tapi tidak bisa diedit
                TextInput::make('stok')
                    ->label('Current Stock')
                    ->numeric()
                    ->disabled()
                    ->dehydrated(false),
            ]);
    }
}
