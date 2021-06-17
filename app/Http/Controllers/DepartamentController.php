<?php

namespace App\Http\Controllers;

use App\Models\Departament;
use Illuminate\Http\Request;
use App\Traits\CrudTrait;

class WorkingDayTypeController extends Controller
{
    use CrudTrait;

    public function setup()
    {
        $this->setModel(Departament::class);
        $this->setNomenclature('departamento', 'departamentos');
        //$this->setListRequest()
    }

}
