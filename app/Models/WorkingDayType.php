<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorkingDayType extends Model
{
    //protected $table = 'attribute_modules';
    protected $hidden = [ 'id' ];
    protected $fillable = [
        'name',
        'code',
    ];

}
