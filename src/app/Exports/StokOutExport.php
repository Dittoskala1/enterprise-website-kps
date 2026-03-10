<?php

namespace App\Exports;

use App\Models\StokOut;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class StokOutExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return StokOut::with(['item', 'user'])
            ->get()
            ->map(function ($stokOut) {
                return [
                    'Item' => $stokOut->item->name,
                    'Quantity' => $stokOut->quantity,
                    'Date' => $stokOut->date,
                    'User' => $stokOut->user->name ?? '-',
                    'Notes' => $stokOut->notes,
                ];
            });
    }

    public function headings(): array
    {
        return [
            'Item',
            'Quantity',
            'Date',
            'User',
            'Notes',
        ];
    }
}