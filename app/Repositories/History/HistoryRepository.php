<?php

namespace App\Repositories\History;

use App\Contracts\History\IHistoryRepository;
use App\Repositories\BaseRepository;
use App\Models\History\History;

class HistoryRepository extends BaseRepository implements IHistoryRepository
{
    public function __construct(History $model)
    {
        parent::__construct($model);
    }
}
