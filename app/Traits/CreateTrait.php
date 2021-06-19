<?php

namespace App\Traits;

use Illuminate\Http\Request;

trait CreateTrait
{
    use CrudTrait;

    /**
     * Store Model
     * @param Request $request (Get request)
     * @param Area model
     */
    public function store(Request $request)
    {
        $this->model->create($request->input());
        return response()->json([
            'message' => 'Se guardó ' . $this->singularNomenclature,
        ], 200);
    }

}
