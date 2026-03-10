<?php

declare(strict_types=1);

namespace App\Filament\Admin\Pages;

use BackedEnum;
use Filament\Pages\Dashboard as BaseDashboard;
use UnitEnum;

final class Dashboard extends BaseDashboard
{
    protected static string|UnitEnum|null $navigationGroup = 'General';

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-home';

    protected static ?string $navigationLabel = 'Dashboard';

    protected static ?int $navigationSort = -2;

    protected static bool $shouldRegisterNavigation = true;

    protected function getHeaderWidgets(): array
    {
        return [
            \App\Filament\Admin\Widgets\InventoryStats::class,
            \App\Filament\Admin\Widgets\InventoryChart::class,
        ];
    }

    protected function getFooterWidgets(): array
    {
        return [
            \App\Filament\Admin\Widgets\LowStockItems::class,
        ];
    }
}
