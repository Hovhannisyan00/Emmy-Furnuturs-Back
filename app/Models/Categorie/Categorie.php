<?php

namespace App\Models\Categorie;

use App\Models\Base\BaseModel;
use App\Models\Categorie\Traits\CatrgorieRelations;

class Categorie extends BaseModel
{
    use CatrgorieRelations;

    protected $fillable = [
        'name',
        'description',
    ];
}
