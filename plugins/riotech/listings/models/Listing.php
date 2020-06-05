<?php namespace Riotech\Listings\Models;

use Model;

/**
 * Model
 */
class Listing extends Model
{
    use \October\Rain\Database\Traits\Validation;

    use \October\Rain\Database\Traits\SoftDelete;

    use \October\Rain\Database\Traits\Sortable;

    use \October\Rain\Database\Traits\Sluggable;

    protected $dates = ['deleted_at'];



    /**
     * @var string The database table used by the model.
     */
    public $table = 'riotech_listings_listings';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    protected $slugs = ['slug' => ['id','street', 'city', 'zip' ]];

    public $attachMany = [
      'images' => 'System\Models\File'
    ];
}
