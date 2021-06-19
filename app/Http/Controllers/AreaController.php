<?php

namespace App\Http\Controllers;

use App\Models\Area;
use Illuminate\Http\Request;
use App\Traits\ListTrait;
use App\Traits\CreateTrait;

class AreaController extends Controller
{
    use ListTrait;
    use CreateTrait;

    public function setup()
    {
        $this->setModel(Area::class);
        $this->setNomenclature('area', 'areas');
    }

}
