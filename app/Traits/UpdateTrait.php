<?php

namespace App\Traits;

use Illuminate\Http\Request;
use App\Http\Requests\UpdateRequest;

trait UpdateTrait
{
    use CrudTrait;

    /**
     * Update Model
     * @param Request $request (Get request)
     * @param model
     */
    public function update(UpdateRequest $request, $code)
    {
        $model = $this->getModelFromCode($code);

        return response()->json([
            'data' => $model,
            'message' => 'Se actualizó ' . $this->singularNomenclature,
        ], 200);
    }
}
