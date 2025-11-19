<?php

namespace App\Models\OrderItems;

use App\Models\Base\BaseModel;
use App\Models\Order\Order;
use App\Models\Product\Product;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderItem extends BaseModel
{
    protected $fillable = [
        'order_id',
        'product_id',
        'quantity',
        'price',
        'total',
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'total' => 'decimal:2',
    ];

    protected $appends = [
        'formatted_price',
        'formatted_total',
    ];

    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    public static function boot(): void
    {
        parent::boot();

        static::creating(function ($item) {
            $item->calculateTotal();
        });

        static::updating(function ($item) {
            $item->calculateTotal();
        });
    }

    public function getFormattedPriceAttribute(): string
    {
        return '$' . number_format($this->price, 2);
    }

    public function getFormattedTotalAttribute(): string
    {
        return '$' . number_format($this->total, 2);
    }

    public function calculateTotal(): void
    {
        $this->total = $this->price * $this->quantity;
    }
}
