<?php

namespace App\Http\Requests\Area;

use Illuminate\Http\Request;
use App\Http\Requests\StoreRequest as SRequest;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;

class StoreRequest extends Controller implements SRequest
{
    use \App\Traits\RequestTrait;

    public function __construct(Request $request)
    {
        $this->request = $request;

        $this->validate($request,
            [
                'name' => 'required'
            ]
        );

        //parent::__construct($request);
    }

}
