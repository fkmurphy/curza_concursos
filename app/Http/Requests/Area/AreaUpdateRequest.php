<?php

namespace App\Http\Requests\Area;

use Illuminate\Http\Request;
use App\Http\Requests\UpdateRequest;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;

class AreaUpdateRequest extends Controller implements UpdateRequest
{
    public function __construct(Request $request)
    {
        $this->validate($request,
            [
                'name' => 'required'
            ]
        );

        parent::__construct($request);
    }

}
