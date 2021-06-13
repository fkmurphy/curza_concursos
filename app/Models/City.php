<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    //protected $table = 'attribute_modules';
    protected $hidden = [ 'id' ];
    protected $fillable = [
        'name',
        'code',
        'province_id',
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

