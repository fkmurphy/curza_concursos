<?php

namespace App\Http\Controllers;

use App\Models\Departament;
use Illuminate\Http\Request;
use App\Traits\{
    ListTrait,
    CreateTrait,
    UpdateTrait,
    ViewTrait,
};

class DepartamentController extends Controller
{
    use ListTrait;
    use CreateTrait;
    use ViewTrait;
    use UpdateTrait;

    public function setup()
    {
        $this->setModel(Departament::class);
        $this->setNomenclature('departamento', 'departamentos');
        //$this->setListRequest()
    }

}
