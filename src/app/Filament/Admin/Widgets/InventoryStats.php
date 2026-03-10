<?php

declare(strict_types=1);

namespace App\Filament\Admin\Widgets;

use App\Models\Item;
use App\Models\StokIn;
use App\Models\StokOut;
use Carbon\Carbon;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

final class InventoryStats extends StatsOverviewWidget
{
    protected static bool $isDiscovered = false;

    protected function getStats(): array
    {
        return [
            Stat::make('Total Items', Item::count())
                ->color('primary'),

            Stat::make('Total Stock', Item::sum('stok'))
                ->color('success'),

            Stat::make(
                'Stock In Today',
                StokIn::whereDate('date', Carbon::today())->sum('quantity')
            )->color('info'),

            Stat::make(
                'Stock Out Today',
                StokOut::whereDate('date', Carbon::today())->sum('quantity')
            )->color('danger'),
        ];
    }
}
