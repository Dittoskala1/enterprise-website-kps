<?php

declare(strict_types=1);

namespace App\Filament\Admin\Resources\Warehouses\Tables;

use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

final class WarehousesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('address')
                    ->searchable(),

                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable(),
            ])
            ->defaultSort('created_at', 'desc');
    }
}
