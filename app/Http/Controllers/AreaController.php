<?php

namespace App\Http\Controllers;

use App\Models\Area;
use Illuminate\Http\Request;

class AreaController extends Controller
{

    protected $pluralName = 'Areas';
    protected $singularName = 'Area';

    /**
     * List of Model
     */
    public function list()
    {
        return response()->json([
            'data' => Area::all(),
            'message' => 'Lista de ' . $this->pluralName,
        ], 200);
    }

    /**
     * View Model
     * @param Request $request (Get request)
     * @param Area model
     */
    public function view(Request $request, Area $area)
    {
        return response()->json([
            'data' => $area,
            'message' => 'Datos de ' . $this->singularName,
        ], 200);
    }

    /**
     * Store Model
     * @param Request $request (Get request)
     * @param Area model
     */
    public function store(Request $request)
    {
        //@todo check
        return response()->json([
            'message' => 'Se guardó ' . $this->singularName,
        ], 200);
    }
    
    /**
     * Update Model
     * @param Request $request (Get request)
     * @param Country model
     */
    public function update(Request $request, Area $area)
    {
        //@todo check
        return response()->json([
            'data' => $area,
            'message' => 'Se actualizó ' . $this->singularName,
        ], 200);
    }

}
