<?php

namespace App\Models\Product\Traits;


trait ProductHelperMethods
{
    public function getCategoryName(): ?string
    {
        return $this->categories?->name;
    }
}
