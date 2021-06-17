<?php

namespace App\Http\Controllers;

use App\Models\WorkingDayType;
use Illuminate\Http\Request;
use App\Traits\CrudTrait;

class WorkingDayTypeController extends Controller
{
    use CrudTrait;

    public function setup()
    {
        $this->setModel(WorkingDayType::class);
        $this->setNomenclature('tipo de jornada', 'tipos de jornada');
        //$this->setListRequest()
    }

}
