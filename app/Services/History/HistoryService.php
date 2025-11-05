<?php

namespace App\Services\History;

use App\Contracts\History\IHistoryRepository;
use App\Services\BaseService;

class HistoryService extends BaseService
{
    public function __construct(
        IHistoryRepository $repository
    ) {
        $this->repository = $repository;
    }
}
