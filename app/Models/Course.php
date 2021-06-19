<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Events\GenerateSlug;

class Career extends Model
{
    //protected $table = 'attribute_modules';
    protected $hidden = [ 'id' ];
    protected $fillable = [
        'name',
        'code',
        'career_id',
    ];

    protected $dispatchesEvents = [
        'creating' => GenerateSlug::class,
    ];


}

