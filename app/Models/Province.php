<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    //protected $table = 'attribute_modules';
    protected $hidden = [ 'id' ];
    protected $fillable = [
        'name',
        'code',
        'country_id',
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

