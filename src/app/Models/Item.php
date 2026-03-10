<?php

declare(strict_types=1);

// app/Models/Item.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

final class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category',
        'unit',
        'stok',
        'minimum_stok',
        'warehouse_id',
    ];

    public function warehouse()
    {
        return $this->belongsTo(Warehouse::class);
    }

    public function stokIns()
    {
        return $this->hasMany(StokIn::class);
    }

    public function stokOuts()
    {
        return $this->hasMany(StokOut::class);
    }
}
