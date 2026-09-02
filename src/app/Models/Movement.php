<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Movement extends Model
{
    protected $fillable = [
        'product_id',
        'quantity',
        'movement_type'
    ];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
