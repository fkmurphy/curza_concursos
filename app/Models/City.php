<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Events\GenerateSlug;

class City extends Model
{
    //protected $table = 'attribute_modules';
    protected $hidden = [ 'id' ];
    protected $fillable = [
        'name',
        'code',
        'province_id',
    ];

    protected $dispatchesEvents = [
        'creating' => GenerateSlug::class,
    ];


    /**
     * ------------------------------------------
     * RELATIONSHIPS
     * -----------------------------------------
     */
    public function province()
    {
        return $this->belongsTo(Province::class);
    }

}

