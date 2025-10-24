<?php

namespace App\Repositories\Categorie;

use App\Contracts\Categorie\ICategorieRepository;
use App\Repositories\BaseRepository;
use App\Models\Categorie\Categorie;

class CategorieRepository extends BaseRepository implements ICategorieRepository
{
    public function __construct(Categorie $model)
    {
        parent::__construct($model);
    }

    public function getCategoriesForSelect(): array {
        return $this->model->pluck('name', 'id')->toArray();
    }

    public function getFooterCategories(): array
    {
        return $this->model
            ->select('id', 'name') // or any other columns
            ->orderBy('name', 'asc')
            ->get()
            ->toArray();
    }
}
