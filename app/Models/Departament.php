<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Events\GenerateSlug;
use App\Services\SPCService;

class Departament //extends Model
{
    /**
     * Departaments from SPC
     * @throws Exception if empty or error service
     * @return Collection data
     */
    public static function all()
    {
        $service = new SPCService();
        $departaments = $service->getAll('departamento');

        if ($departaments['code'] >= 400) {
            throw new \Exception('Model error');
        }

        return collect(json_decode($departaments['data']));
    }

    public static function find($id)
    {
        $service = new SPCService();
        $departaments = $service->getOne('departamento', $id);

        if ($departaments['code'] >= 400) {
            throw new \Exception('Model error');
        }

        return collect(json_decode($departaments['data']));
    }
}

