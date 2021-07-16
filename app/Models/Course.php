<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Model;
//use App\Events\GenerateSlug;
use App\Services\SPCService;

class Course //extends Model
{
    /**
     * Course from SPC
     * @throws Exception if empty or error service
     * @return Collection data
     */
    public static function all()
    {
        $service = new SPCService();
        $courses = $service->getAll('asignatura');

        if ($courses['code'] >= 400) {
            throw new \Exception('Model error');
        }

        return collect(json_decode($courses['data']));
    }

    public static function find($id)
    {
        $service = new SPCService();
        $course = $service->getOne('asignatura', $id);

        if ($course['code'] >= 400) {
            throw new \Exception('Model error, status:'. $course['code'] . $course['data']);
        }

        return collect(json_decode($course['data']));
    }


}

