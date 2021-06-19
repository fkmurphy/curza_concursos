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
    public function update(Request $request, $code)
    {
        $model = $this->getModelFromCode($code);

        return response()->json([
            'data' => $model,
            'message' => 'Se actualizó ' . $this->singularNomenclature,
        ], 200);
    }
}
