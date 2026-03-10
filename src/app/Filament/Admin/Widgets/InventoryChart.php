<?php

declare(strict_types=1);

namespace App\Filament\Admin\Widgets;

use App\Models\StokIn;
use App\Models\StokOut;
use Carbon\Carbon;
use Filament\Widgets\ChartWidget;

final class InventoryChart extends ChartWidget
{
    protected static bool $isDiscovered = false;

    protected ?string $heading = 'Stock Movement (Last 7 Days)';

    protected function getData(): array
    {
        $labels = [];
        $stokInData = [];
        $stokOutData = [];

        for ($i = 6; $i >= 0; $i--) {
            $date = Carbon::today()->subDays($i);

            $labels[] = $date->format('d M');

            $stokInData[] = StokIn::whereDate('date', $date)->sum('quantity');
            $stokOutData[] = StokOut::whereDate('date', $date)->sum('quantity');
        }

        return [
            'datasets' => [
                [
                    'label' => 'Stock In',
                    'data' => $stokInData,
                ],
                [
                    'label' => 'Stock Out',
                    'data' => $stokOutData,
                ],
            ],
            'labels' => $labels,
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
