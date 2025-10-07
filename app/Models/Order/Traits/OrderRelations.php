<?php

namespace App\Models\Order\Traits;

use App\Models\User\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait OrderRelations
{
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}

