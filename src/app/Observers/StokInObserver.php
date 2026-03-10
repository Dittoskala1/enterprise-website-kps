<?php

declare(strict_types=1);

namespace App\Observers;

use App\Models\StokIn;

final class StokInObserver
{
    public function created(StokIn $stokIn)
    {
        $stokIn->item->increment('stok', $stokIn->quantity);
    }

    public function updated(StokIn $stokIn)
    {
        $originalQty = $stokIn->getOriginal('quantity');
        $newQty = $stokIn->quantity;

        $difference = $newQty - $originalQty;

        $stokIn->item->increment('stok', $difference);
    }

    public function deleted(StokIn $stokIn)
    {
        $stokIn->item->decrement('stok', $stokIn->quantity);
    }
}
