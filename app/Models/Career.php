<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Model;
use App\Services\SPCService;

class Career //extends Model
{
    /**
     * Course from SPC
     * @throws Exception if empty or error service
     * @return Collection data
     */
    public static function all()
    {
        $service = new SPCService();
        $careers = $service->getAll('carrera');

        if ($careers['code'] >= 400) {
            throw new \Exception('Model error');
        }

        return collect(json_decode($careers['data']));
    }

    public static function find($id)
    {
        $service = new SPCService();
        $career = $service->getOne('carrera', $id);

        if ($career['code'] >= 400) {
            throw new \Exception('Model error, status:'. $career['code'] . $career['data']);
        }

        return collect(json_decode($career['data']));
    }


}

