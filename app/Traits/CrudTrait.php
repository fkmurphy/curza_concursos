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

    /**
     * List of Model
     */
    public function list()
    {
        return response()->json([
            'data' => get_class($this->model)::all(),
            'message' => 'Lista de ' . $this->pluralNomenclature,
        ], 200);
    }

    /**
     * View Model
     * @param Request $request (Get request)
     * @param Area model
     */
    public function view(Request $request, $modelId)
    {
        return response()->json([
            'data' => $this->model->findOrFail($modelId),
            'message' => 'Datos de ' . $this->singularNomenclature,
        ], 200);
    }

    /**
     * Store Model
     * @param Request $request (Get request)
     * @param Area model
     */
    public function store(Request $request)
    {
        //@todo check
        return response()->json([
            'message' => 'Se guardó ' . $this->singularNomenclature,
        ], 200);
    }
    
    /**
     * Update Model
     * @param Request $request (Get request)
     * @param model
     */
    public function update(Request $request, $modelId)
    {
        //@todo check
        return response()->json([
            'data' => $this->model->findOrFail($modelId),
            'message' => 'Se actualizó ' . $this->singularNomenclature,
        ], 200);
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
