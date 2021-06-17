<?php

namespace App\Http\Controllers;

use App\Models\Area;
use Illuminate\Http\Request;
use App\Traits\CrudTrait;

class AreaController extends Controller
{
    use CrudTrait;

    public function setup()
    {
        $this->setModel(Area::class);
        $this->setNomenclature('area', 'areas');
    }

}
