<?php

namespace App\Http\Controllers;

use App\Models\Contest;
use Illuminate\Http\Request;
use App\Traits\{
    ListTrait,
    CreateTrait,
    UpdateTrait,
    ViewTrait,
    CRUDRequestTrait,
};

class ContestController extends Controller
{
    use ListTrait;
    use CreateTrait;
    use ViewTrait;
    use UpdateTrait;
    use CRUDRequestTrait;

    public function setup()
    {
        $this->setModel(Contest::class);
        $this->setNomenclature('concurso', 'concursos');
        $this->request();
    }


}
