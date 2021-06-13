<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Postulation extends Model
{
    //protected $table = 'attribute_modules';
    protected $hidden = [ 'id' ];
    protected $fillable = [
        'contest_id',
        'person_id',
        'files',
        'meet_date',
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

    public function contest()
    {
        return $this->belongsTo(Contest::class);
    }

}

