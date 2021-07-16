<?php

namespace App\Http\Controllers;

use App\Models\Career;
use Illuminate\Http\Request;
use App\Traits\{
    ListTrait,
    CreateTrait,
    UpdateTrait,
    ViewTrait,
};

class CareerController extends Controller
{
    use ListTrait;
    use CreateTrait;
    use ViewTrait;
    use UpdateTrait;

    public function setup()
    {
        $this->setModel(Career::class);
        $this->setNomenclature('carrera', 'carreras');
    }

    /**
     * View Model
     * @param Request $request (Get request)
     * @param Departament model
     */
    public function view(Request $request, $code)
    {
        return response()->json([
            'data' => Career::find($code),
            'message' => 'Datos de ' . $this->singularNomenclature,
        ], 200);
    }
}
