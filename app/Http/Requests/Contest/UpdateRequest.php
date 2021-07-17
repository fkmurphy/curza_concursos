<?php

namespace App\Http\Requests\Contest;

use Illuminate\Http\Request;
use App\Http\Requests\UpdateRequest as URequest;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;

class UpdateRequest extends Controller implements URequest
{
    use \App\Traits\RequestTrait;

    public function __construct(Request $request)
    {
        $this->validate($request,
            [
                'name' => 'required'
            ]
        );
    }
}
