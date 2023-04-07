<?php

namespace App\Models\Article;

use App\Casts\DateCast;
use App\Models\Base\BaseModel;
use App\Models\Base\Traits\HasFileData;
use App\Models\Base\Traits\HasMlData;
use App\Models\File\File;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Article extends BaseModel
{
    use HasFileData;
    use HasMlData;

    /**
     * in create/update set default values for model
     *
     * @var array
     */
    public array $defaultValues = [];

    /**
     * @var string[]
     */
    protected $fillable = [
        'slug',
        'publish_date',
        'release_date_time',
        'multiple_group_data',
        'multiple_author',
        'show_status'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'created_at' => DateCast::class,

        'multiple_group_data' => 'array',
        'multiple_author' => 'array',

        // Will be changed price field
//        'price' => CurrencyCast::class,

        // Will be added new attribute, get data with icon and formatted
//        'price_formatted' => CurrencyCast::class . ':1,1',

        // Will be added new attribute, get data with formatted
//        'price_formatted' => CurrencyCast::class . ':0,1',

        'publish_date' => DateCast::class,
        'release_date_time' => DateCast::class . ':0,1',
//        'publish_date_formatted' => DateCast::class.':1'
    ];

//    /**
//     * If custom Ml model open comment and set you model ml
//     * Function to set ml class
//     *
//     * @return BaseMlModel
//     */
//    protected function setMlClass(): BaseMlModel
//    {
//        return new ArticleMls();
//    }

    /**
     * Function to return photo
     */
    public function photo(): MorphOne
    {
        return $this->morphOne(File::class, 'fileable')->where('field_name', 'photo');
    }
}
