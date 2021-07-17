<?php

namespace App\Http\Requests\Area;

use Illuminate\Http\Request;
use App\Http\Requests\StoreRequest;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;

class AreaStoreRequest extends Controller implements StoreRequest
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
