<?php

namespace App\Traits;

//use Illuminate\Http\Request;
use App\Http\Requests\StoreRequest;

trait CreateTrait
{
    use CrudTrait;

    /**
     * Store Model
     * @param Request $request (Get request)
     * @param Area model
     */
    public function store(StoreRequest $request)
    {
        $this->model->create($request->input());
        return response()->json([
            'message' => 'Se guardó ' . $this->singularNomenclature,
        ], 200);
    }

}
