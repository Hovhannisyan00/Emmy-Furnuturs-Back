<?php

namespace App\Models\Order;

use App\Models\Base\BaseModel;
use App\Models\Order\Enums\OrderStatus;
use App\Models\OrderItems\OrderItem;
use App\Models\User\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends BaseModel
{
    protected $fillable = [
        'user_id',
        'status',
        'total',
        'subtotal',
        'tax',
        'shipping_cost',
        'order_number',
        'shipping_first_name',
        'shipping_last_name',
        'shipping_company',
        'shipping_address',
        'shipping_city',
        'shipping_state',
        'shipping_country',
        'shipping_zip_code',
        'shipping_email',
        'shipping_phone',
        'notes',
        'payment_method',
    ];

    protected $casts = [
        'status' => OrderStatus::class,
        'total' => 'decimal:2',
        'subtotal' => 'decimal:2',
        'tax' => 'decimal:2',
        'shipping_cost' => 'decimal:2',
    ];

    protected $appends = [
        'formatted_total',
        'formatted_subtotal',
        'shipping_full_name',
        'shipping_full_address',
    ];

    /**
     * Relationships
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function customer(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function items(): HasMany
    {
        return $this->hasMany(OrderItem::class);
    }

    /**
     * Boot the model.
     */
    public static function boot(): void
    {
        parent::boot();

        static::creating(function ($order) {
            if (empty($order->order_number)) {
                $order->order_number = 'ORD-' . date('Ymd') . '-' . strtoupper(uniqid());
            }
        });
    }

    /**
     * Accessors
     */
    public function getFormattedTotalAttribute(): string
    {
        return '$' . number_format($this->total, 2);
    }

    public function getFormattedSubtotalAttribute(): string
    {
        return '$' . number_format($this->subtotal, 2);
    }

    public function getShippingFullNameAttribute(): string
    {
        return $this->shipping_first_name . ' ' . $this->shipping_last_name;
    }

    public function getShippingFullAddressAttribute(): string|null
    {
        $address = $this->shipping_address;

        if ($this->shipping_city) {
            $address .= ', ' . $this->shipping_city;
        }

        if ($this->shipping_state) {
            $address .= ', ' . $this->shipping_state;
        }

        if ($this->shipping_zip_code) {
            $address .= ' ' . $this->shipping_zip_code;
        }

        if ($this->shipping_country) {
            $address .= ', ' . $this->shipping_country;
        }

        return $address;
    }

    /**
     * Scopes
     */
    public function scopePending($query)
    {
        return $query->where('status', OrderStatus::Pending);
    }

    public function scopeCompleted($query)
    {
        return $query->whereIn('status', [OrderStatus::Delivered, OrderStatus::Shipped]);
    }

    public function scopeForUser($query, $userId)
    {
        return $query->where('user_id', $userId);
    }

    /**
     * Status checks
     */
    public function isPending(): bool
    {
        return $this->status === OrderStatus::Pending;
    }

    public function isCompleted(): bool
    {
        return in_array($this->status, [OrderStatus::Delivered, OrderStatus::Shipped], true);
    }

    public function canBeCancelled(): bool
    {
        return in_array($this->status, [OrderStatus::Pending, OrderStatus::Paid], true);
    }

    /**
     * Calculate totals from items
     */
    public function calculateTotals(): void
    {
        $subtotal = $this->items->sum('total');
        $this->update([
            'subtotal' => $subtotal,
            'total' => $subtotal + $this->tax + $this->shipping_cost,
        ]);
    }
}
