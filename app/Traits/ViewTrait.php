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
    public function view(Request $request, $code)
    {
        $model = $this->getModelFromCode($code);

        return response()->json([
            'data' => $model,
            'message' => 'Datos de ' . $this->singularNomenclature,
        ], 200);
    }
}
