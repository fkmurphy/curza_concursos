<?php

namespace App\Http\Controllers;

use App\Models\Orientation;
use Illuminate\Http\Request;
use App\Traits\CrudTrait;

class OrientationController extends Controller
{
    use CrudTrait;

    public function setup()
    {
        $this->setModel(Orientation::class);
        $this->setNomenclature('orientación', 'orientaciones');
        //$this->setListRequest()
    }

}
