<?php

namespace App\Models\Coupon;

use App\Models\User\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Coupon extends Model
{
    protected $fillable = [
        'coupon',
        'user_id',
        'is_expired',
        'discount',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
