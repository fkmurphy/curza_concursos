<?php

namespace App\Http\Controllers;

use App\Models\RemunerationType;
use App\Traits\CreateTrait;
use App\Traits\ListTrait;
use App\Traits\UpdateTrait;
use App\Traits\ViewTrait;

class RemunerationTypeController extends Controller
{
    use ListTrait;
    use CreateTrait;
    use ViewTrait;
    use UpdateTrait;

    public function setup()
    {
        $this->setModel(RemunerationType::class);
        $this->setNomenclature('tipo de remuneración', 'tipos de remuneración');
    }

}
