<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{

    protected $pluralName = 'Países';
    protected $singularName = 'País';

    /**
     * List of Model
     */
    public function list()
    {
        return response()->json([
            'data' => Country::all(),
            'message' => 'Lista de ' . $this->pluralName,
        ], 200);
    }

    /**
     * View Model
     * @param Request $request (Get request)
     * @param Country model
     */
    public function view(Request $request, Country $country)
    {
        return response()->json([
            'data' => $country,
            'message' => 'Datos de ' . $this->singularName,
        ], 200);
    }

    /**
     * Store Model
     * @param Request $request (Get request)
     * @param Country model
     */
    public function store(Request $request)
    {
        //@todo check
        return response()->json([
            'data' => $country,
            'message' => 'Se guardó ' . $this->singularName,
        ], 200);
    }
    
    /**
     * Update Model
     * @param Request $request (Get request)
     * @param Country model
     */
    public function update(Request $request, Country $country)
    {
        //@todo check
        return response()->json([
            'data' => $country,
            'message' => 'Se actualizó ' . $this->singularName,
        ], 200);
    }

    public function get(Request $request)
    {
        return response()->json([
            'data' => [
                [
                    'id' => 1,
                ]
            ],
        ]);
    }
}
