<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    //protected $table = 'attribute_modules';
    protected $hidden = [ 'id' ];
    protected $fillable = [
        'first_name',
        'last_name',
        'uid',
        'contact_email',
        'cellphone',
        'phone',
        'citizenship',
        'real_address',
        'legal_address',
        'date_of_birth',
        'place_of_birth',
    ];
}

