<?php

namespace App\Models\Product\Traits;

use App\Models\Categorie\Categorie;
use App\Models\File\File;
use App\Models\ProductSize\ProductSize;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;

trait ProductRelations
{
    public function categories(): BelongsTo
    {
        return $this->belongsTo(Categorie::class, 'category_id');
    }

    public function sizes(): HasMany
    {
        return $this->hasMany(ProductSize::class, 'product_id');
    }

    public function photo1(): MorphOne
    {
        return $this->morphOne(File::class, 'fileable')->where('field_name', 'photo1');
    }

    public function photo2(): MorphOne
    {
        return $this->morphOne(File::class, 'fileable')->where('field_name', 'photo2');
    }

    public function photo3(): MorphOne
    {
        return $this->morphOne(File::class, 'fileable')->where('field_name', 'photo3');
    }

    public function photo4(): MorphOne
    {
        return $this->morphOne(File::class, 'fileable')->where('field_name', 'photo4');
    }

    public function photo5(): MorphOne
    {
        return $this->morphOne(File::class, 'fileable')->where('field_name', 'photo5');
    }

    public function photo6(): MorphOne
    {
        return $this->morphOne(File::class, 'fileable')->where('field_name', 'photo6');
    }

    public function photo7(): MorphOne
    {
        return $this->morphOne(File::class, 'fileable')->where('field_name', 'photo7');
    }

    public function photo8(): MorphOne
    {
        return $this->morphOne(File::class, 'fileable')->where('field_name', 'photo8');
    }

    public function photo9(): MorphOne
    {
        return $this->morphOne(File::class, 'fileable')->where('field_name', 'photo9');
    }

    public function photo10(): MorphOne
    {
        return $this->morphOne(File::class, 'fileable')->where('field_name', 'photo10');
    }

    public function photo11(): MorphOne
    {
        return $this->morphOne(File::class, 'fileable')->where('field_name', 'photo11');
    }

    public function photo12(): MorphOne
    {
        return $this->morphOne(File::class, 'fileable')->where('field_name', 'photo12');
    }

    public function photo13(): MorphOne
    {
        return $this->morphOne(File::class, 'fileable')->where('field_name', 'photo13');
    }

    public function photo14(): MorphOne
    {
        return $this->morphOne(File::class, 'fileable')->where('field_name', 'photo14');
    }

    public function photo15(): MorphOne
    {
        return $this->morphOne(File::class, 'fileable')->where('field_name', 'photo15');
    }

    public function photo16(): MorphOne
    {
        return $this->morphOne(File::class, 'fileable')->where('field_name', 'photo16');
    }

    public function photo17(): MorphOne
    {
        return $this->morphOne(File::class, 'fileable')->where('field_name', 'photo17');
    }

    public function photo18(): MorphOne
    {
        return $this->morphOne(File::class, 'fileable')->where('field_name', 'photo18');
    }

    public function photo19(): MorphOne
    {
        return $this->morphOne(File::class, 'fileable')->where('field_name', 'photo19');
    }

    public function photo20(): MorphOne
    {
        return $this->morphOne(File::class, 'fileable')->where('field_name', 'photo20');
    }

    public function photo21(): MorphOne
    {
        return $this->morphOne(File::class, 'fileable')->where('field_name', 'photo21');
    }

    public function photo22(): MorphOne
    {
        return $this->morphOne(File::class, 'fileable')->where('field_name', 'photo22');
    }

    public function photo23(): MorphOne
    {
        return $this->morphOne(File::class, 'fileable')->where('field_name', 'photo23');
    }

    public function photo24(): MorphOne
    {
        return $this->morphOne(File::class, 'fileable')->where('field_name', 'photo24');
    }

    public function photo25(): MorphOne
    {
        return $this->morphOne(File::class, 'fileable')->where('field_name', 'photo25');
    }

    public function photo26(): MorphOne
    {
        return $this->morphOne(File::class, 'fileable')->where('field_name', 'photo26');
    }

    public function photo27(): MorphOne
    {
        return $this->morphOne(File::class, 'fileable')->where('field_name', 'photo27');
    }

    public function photo28(): MorphOne
    {
        return $this->morphOne(File::class, 'fileable')->where('field_name', 'photo28');
    }

    public function photo29(): MorphOne
    {
        return $this->morphOne(File::class, 'fileable')->where('field_name', 'photo29');
    }

    public function photo30(): MorphOne
    {
        return $this->morphOne(File::class, 'fileable')->where('field_name', 'photo30');
    }

    public function photo31(): MorphOne
    {
        return $this->morphOne(File::class, 'fileable')->where('field_name', 'photo31');
    }

    public function photo32(): MorphOne
    {
        return $this->morphOne(File::class, 'fileable')->where('field_name', 'photo32');
    }

    public function photo33(): MorphOne
    {
        return $this->morphOne(File::class, 'fileable')->where('field_name', 'photo33');
    }

    public function photo34(): MorphOne
    {
        return $this->morphOne(File::class, 'fileable')->where('field_name', 'photo34');
    }

    public function photo35(): MorphOne
    {
        return $this->morphOne(File::class, 'fileable')->where('field_name', 'photo35');
    }

    public function photo36(): MorphOne
    {
        return $this->morphOne(File::class, 'fileable')->where('field_name', 'photo36');
    }

    public function photo37(): MorphOne
    {
        return $this->morphOne(File::class, 'fileable')->where('field_name', 'photo37');
    }

    public function photo38(): MorphOne
    {
        return $this->morphOne(File::class, 'fileable')->where('field_name', 'photo38');
    }

    public function photo39(): MorphOne
    {
        return $this->morphOne(File::class, 'fileable')->where('field_name', 'photo39');
    }

    public function photo40(): MorphOne
    {
        return $this->morphOne(File::class, 'fileable')->where('field_name', 'photo40');
    }

    public function photo41(): MorphOne
    {
        return $this->morphOne(File::class, 'fileable')->where('field_name', 'photo41');
    }

    public function photo42(): MorphOne
    {
        return $this->morphOne(File::class, 'fileable')->where('field_name', 'photo42');
    }

    public function photo43(): MorphOne
    {
        return $this->morphOne(File::class, 'fileable')->where('field_name', 'photo43');
    }

    public function photo44(): MorphOne
    {
        return $this->morphOne(File::class, 'fileable')->where('field_name', 'photo44');
    }

    public function photo45(): MorphOne
    {
        return $this->morphOne(File::class, 'fileable')->where('field_name', 'photo45');
    }

    public function photo46(): MorphOne
    {
        return $this->morphOne(File::class, 'fileable')->where('field_name', 'photo46');
    }

    public function photo47(): MorphOne
    {
        return $this->morphOne(File::class, 'fileable')->where('field_name', 'photo47');
    }

    public function photo48(): MorphOne
    {
        return $this->morphOne(File::class, 'fileable')->where('field_name', 'photo48');
    }
}
