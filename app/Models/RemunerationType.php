<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Events\GenerateSlug;

class RemunerationType extends Model
{
    //protected $table = 'attribute_modules';
    protected $hidden = [ 'id' ];
    protected $fillable = [
        'name',
        'code',
    ];

    protected $dispatchesEvents = [
        'creating' => GenerateSlug::class,
    ];

}

