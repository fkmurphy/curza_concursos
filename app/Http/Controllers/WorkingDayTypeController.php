<?php

namespace App\Http\Controllers;

use App\Models\WorkingDayType;
use App\Traits\CreateTrait;
use App\Traits\ListTrait;
use App\Traits\UpdateTrait;
use App\Traits\ViewTrait;
use Illuminate\Http\Request;
use App\Traits\CrudTrait;

class WorkingDayTypeController extends Controller
{
    use ListTrait;
    use CreateTrait;
    use ViewTrait;
    use UpdateTrait;

    public function setup()
    {
        $this->setModel(WorkingDayType::class);
        $this->setNomenclature('tipo de jornada', 'tipos de jornada');
    }

}
