<?php

declare(strict_types=1);

namespace App\Filament\Admin\Widgets;

use App\Models\Item;
use Filament\Tables;
use Filament\Widgets\TableWidget as BaseWidget;
use Illuminate\Database\Eloquent\Builder;

final class LowStockItems extends BaseWidget
{
    protected static bool $isDiscovered = false;

    protected int|string|array $columnSpan = 'full';

    protected function getTableQuery(): Builder
    {
        return Item::query()
            ->whereColumn('stok', '<=', 'minimum_stok');
    }

    protected function getTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('name')
                ->label('Item Name')
                ->searchable(),

            Tables\Columns\TextColumn::make('stok')
                ->label('Current Stock')
                ->color('danger'),

            Tables\Columns\TextColumn::make('minimum_stok')
                ->label('Minimum Stock'),

            Tables\Columns\TextColumn::make('warehouse.name')
                ->label('Warehouse'),
        ];
    }
}
