<?php

namespace App\Models\User\Traits;


trait UserCouponTrait
{
    public function getCouponAttribute(): ?string
    {
        $coupon = $this->coupons()->first();

        // Добавьте отладку
        logger('Coupons found:', $this->coupons->toArray());
        logger('First coupon:', [$coupon]);

        return $coupon?->coupon;
    }

    public function getCouponDiscountAttribute(): ?int
    {
        return $this->coupons()->first()?->discount;
    }
}
