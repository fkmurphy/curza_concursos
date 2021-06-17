<?php

namespace App\Http\Controllers;

use App\Models\Contest;
use Illuminate\Http\Request;
use App\Traits\CrudTrait;

class ContestController extends Controller
{
    use CrudTrait;

    public function setup()
    {
        $this->setModel(Contest::class);
        $this->setNomenclature('concurso', 'concursos');
        //$this->setListRequest()
    }

}
