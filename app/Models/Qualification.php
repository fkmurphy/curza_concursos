<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    //protected $table = 'attribute_modules';
    protected $hidden = [ 'id' ];
    protected $fillable = [
        'name',
        'custom_institution',
        'custom_grade_type',
        'description',
        'file_path',
        'person_id'
    ];

    /**
     * ------------------------------------------
     * RELATIONSHIPS
     * -----------------------------------------
     */
    public function person()
    {
        return $this->belongsTo(Person::class);
    }
}

