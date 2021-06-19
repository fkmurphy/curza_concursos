<?php

namespace App\Traits;

use Illuminate\Http\Request;

trait UpdateTrait
{
    use CrudTrait;

    /**
     * Update Model
     * @param Request $request (Get request)
     * @param model
     */
    public function update(Request $request, $modelId)
    {
        //@todo check
        return response()->json([
            'data' => $this->model->findOrFail($modelId),
            'message' => 'Se actualizó ' . $this->singularNomenclature,
        ], 200);
    }
}
