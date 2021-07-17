<?php

namespace App\Traits;

use App\Http\Requests\{
    StoreRequest,
    UpdateRequest,
};

trait CRUDRequestTrait
{
    private function request()
    {
        app()->bind(StoreRequest::class, function($app) {
            return $app->make(('\App\Http\Requests\\' . $this->getModelName() . '\StoreRequest'));
        });

        app()->bind(UpdateRequest::class, function($app) {
            return $app->make(('\App\Http\Requests\\' . $this->getModelName() . '\UpdateRequest'));
        });
    }

}
