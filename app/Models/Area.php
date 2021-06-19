<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Events\GenerateSlug;

class Area extends Model
{
    //protected $table = 'areas';
    protected $hidden = [ 'id' ];
    protected $fillable = [
        'name',
        'code',
    ];

    protected $dispatchesEvents = [
        'creating' => GenerateSlug::class,
    ];

}

