<?php

namespace App\Http\Controllers;

use App\Models\Area;
use Illuminate\Http\Request;
use App\Http\Requests\Area\AreaStoreRequest;
use App\Http\Requests\{
    StoreRequest,
    UpdateRequest,
};
use App\Traits\{
    ListTrait,
    CreateTrait,
    UpdateTrait,
    ViewTrait,
    CRUDRequestTrait,
};

class AreaController extends Controller
{
    use ListTrait;
    use CreateTrait;
    use ViewTrait;
    use UpdateTrait;
    use CRUDRequestTrait;

    public function setup()
    {
        $this->setModel(Area::class);
        $this->setNomenclature('area', 'areas');
        $this->request();
    }

}
