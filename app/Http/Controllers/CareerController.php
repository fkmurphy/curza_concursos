<?php

namespace App\Http\Controllers;

use App\Models\Career;
use Illuminate\Http\Request;
use App\Traits\CrudTrait;

class CareerController extends Controller
{
    use CrudTrait;

    public function setup()
    {
        $this->setModel(Career::class);
        $this->setNomenclature('carrera', 'carreras');
    }

}
