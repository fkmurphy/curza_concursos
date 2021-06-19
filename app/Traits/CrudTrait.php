<?php

namespace App\Traits;

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

    protected function setNomenclature(string $plural, string $singular)
    {
        $this->singularNomenclature = $singular;
        $this->pluralNomenclature = $plural;
    }
}
