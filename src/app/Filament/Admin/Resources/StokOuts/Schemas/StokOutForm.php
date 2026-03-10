<?php

declare(strict_types=1);

namespace App\Filament\Admin\Resources\StokOuts\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

final class StokOutForm
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

                TextInput::make('quantity')
                    ->numeric()
                    ->required()
                    ->minValue(1),

                DatePicker::make('date')
                    ->required()
                    ->default(now()),

                Textarea::make('notes')
                    ->rows(3)
                    ->nullable(),
            ]);
    }
}
