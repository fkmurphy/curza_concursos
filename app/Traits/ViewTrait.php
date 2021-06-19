<?php

namespace App\Traits;

use Illuminate\Http\Request;

trait ViewTrait
{
    use CrudTrait;

    /**
     * View Model
     * @param Request $request (Get request)
     * @param Area model
     */
    public function view(Request $request, $modelId)
    {
        return response()->json([
            'data' => $this->model->findOrFail($modelId),
            'message' => 'Datos de ' . $this->singularNomenclature,
        ], 200);
    }
}
