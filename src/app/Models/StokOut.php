<?php

declare(strict_types=1);

// app/Models/StockOut.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

final class StokOut extends Model
{
    use HasFactory;

    protected $fillable = [
        'item_id',
        'user_id',
        'quantity',
        'date',
        'notes',
    ];

    protected $casts = [
        'date' => 'date',
    ];

    public function item()
    {
        return $this->belongsTo(Item::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
