<?php

namespace App\Http\Requests\Area;

use Illuminate\Http\Request;
use App\Http\Requests\StoreRequest;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;

class AreaStoreRequest extends Controller implements StoreRequest
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
