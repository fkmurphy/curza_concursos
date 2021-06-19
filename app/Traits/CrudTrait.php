<?php

namespace App\Traits;

use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

trait CrudTrait
{
    protected $model;
    protected $singularNomenclature;
    protected $pluralNomenclature;

    public function __construct()
    {
        $this->setup();
    }

    protected function setModel($namespace)
    {
        $this->model = new $namespace();
    }

    protected function setNomenclature(string $singular, string $plural)
    {
        $this->singularNomenclature = $singular;
        $this->pluralNomenclature = $plural;
    }

    protected function getModelFromCode(string $code)
    {
        $model = $this->model->whereCode($code)->first();

        if (!isset($model)) {
            throw new NotFoundHttpException('Model ' . $this->singularNomenclature . ' not found.');
        }

        return $model;
    }
}
