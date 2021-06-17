<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;
use App\Traits\CrudTrait;

class PersonController extends Controller
{
    use CrudTrait;

    public function setup()
    {
        $this->setModel(Departament::class);
        $this->setNomenclature('persona', 'personas');
        //$this->setListRequest()
    }

}
