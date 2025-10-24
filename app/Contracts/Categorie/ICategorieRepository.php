<?php

namespace App\Contracts\Categorie;

interface ICategorieRepository
{
    public function getCategoriesForSelect(): array;

    public function getFooterCategories(): array;
}
