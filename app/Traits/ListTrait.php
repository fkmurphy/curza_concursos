<?php

namespace App\Traits;

use Illuminate\Http\Request;

trait ListTrait
{
    use CrudTrait;

    /**
     * List of Model
     */
    public function list()
    {
        return response()->json([
            'data' => get_class($this->model)::all(),
            'message' => 'Lista de ' . $this->pluralNomenclature,
        ], 200);
    }

}
