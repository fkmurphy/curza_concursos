<?php

namespace App\Traits;

trait RequestTrait
{
    protected $request;

    public function input()
    {
        return $this->request->input();
    }

}
