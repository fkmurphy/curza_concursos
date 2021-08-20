<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;
use App\Traits\CrudTrait;

class RegisterPersonController extends Controller
{

    public function store(Request $request)
    {
        $input = $request->input();
        $this->model->create($input);
        return response()->json([
            'message' => 'Se guardó ' . $this->singularNomenclature,
        ], 200);

    }

}
