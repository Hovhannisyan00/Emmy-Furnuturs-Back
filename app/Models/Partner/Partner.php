<?php

namespace App\Models\Partner;

use App\Models\Base\BaseModel;
use App\Models\Base\Traits\HasFileData;
use App\Models\Partner\Traits\PartnerRelations;

class Partner extends BaseModel
{
    use HasFileData;
    use PartnerRelations;

    /**
     * @var string[]
     */
    protected $fillable = [
        'name'
    ];
}
