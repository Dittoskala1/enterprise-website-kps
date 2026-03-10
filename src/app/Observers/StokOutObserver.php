<?php

declare(strict_types=1);

namespace App\Observers;

use App\Models\Item;
use App\Models\StokOut;
use Illuminate\Validation\ValidationException;

final class StokOutObserver
{
    public function created(StokOut $stokOut)
    {
        $item = Item::find($stokOut->item_id);

        if (! $item) {
            return;
        }

        if ($item->stok < $stokOut->quantity) {
            throw ValidationException::withMessages([
                'quantity' => 'Stok tidak mencukupi.',
            ]);
        }

        $item->decrement('stok', $stokOut->quantity);
    }

    public function updated(StokOut $stokOut)
    {
        $item = Item::find($stokOut->item_id);

        if (! $item) {
            return;
        }

        $originalQty = $stokOut->getOriginal('quantity');
        $newQty = $stokOut->quantity;
        $difference = $newQty - $originalQty;

        if ($difference > 0) {
            if ($item->stok < $difference) {
                throw ValidationException::withMessages([
                    'quantity' => 'Stok tidak mencukupi untuk update.',
                ]);
            }

            $item->decrement('stok', $difference);
        }

        if ($difference < 0) {
            $item->increment('stok', abs($difference));
        }
    }

    public function deleted(StokOut $stokOut)
    {
        $item = Item::find($stokOut->item_id);

        if ($item) {
            $item->increment('stok', $stokOut->quantity);
        }
    }
}
