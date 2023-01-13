<?php

namespace App\Models\Scopes\Base;

use App\Models\Base\BaseModel;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class DeletedScope implements Scope
{
    /**
     * Apply the scope to a given Eloquent query builder.
     *
     * @param Builder $builder
     * @param Model $model
     * @return void
     */
    public function apply(Builder $builder, Model $model): void
    {
        if ($model->hasShowStatus()) {
            $builder->where('show_status', '!=', BaseModel::SHOW_STATUS_DELETED);
        }
    }
}
