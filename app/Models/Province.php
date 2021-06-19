<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Events\GenerateSlug;

class Province extends Model
{
    //protected $table = 'attribute_modules';
    protected $hidden = [ 'id' ];
    protected $fillable = [
        'name',
        'code',
        'country_id',
    ];

    protected $dispatchesEvents = [
        'creating' => GenerateSlug::class,
    ];


    /**
     * ------------------------------------------
     * RELATIONSHIPS
     * -----------------------------------------
     */
    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}

