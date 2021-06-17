<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;
use App\Traits\CrudTrait;

class CountryController extends Controller
{
    use CrudTrait;

    public function setup()
    {
        $this->setModel(Country::class);
        $this->setNomenclature('pais', 'paises');
        //$this->setListRequest()
    }

}
