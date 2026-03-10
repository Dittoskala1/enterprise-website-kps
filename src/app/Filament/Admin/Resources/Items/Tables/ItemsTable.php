<?php

declare(strict_types=1);

namespace App\Filament\Admin\Resources\Items\Tables;

use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

final class ItemsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('category')
                    ->searchable(),

                TextColumn::make('unit'),

                TextColumn::make('stok')
                    ->badge()
                    ->color(fn ($record) => $record->stok <= $record->minimum_stok
                            ? 'danger'
                            : 'success'
                    )
                    ->sortable(),

                TextColumn::make('minimum_stok')
                    ->sortable(),

                TextColumn::make('warehouse.name')
                    ->label('Warehouse')
                    ->sortable()
                    ->searchable(),
            ])
            ->defaultSort('created_at', 'desc');
    }
}
