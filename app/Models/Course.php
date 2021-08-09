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

        // implement mapper

        $collect = collect(json_decode($courses['data']));
        $collect = $collect->map(function($course){
            $map = [];
            $map['code'] = $course->id;
            $map['name'] = $course->nombre;
            return $map;
        });
        return $collect;
    }

    public static function findByCareer($careerId)
    {
        $service = new SPCService();
        $careers = $service->getAll('carrera/' . $careerId);

        if ($careers['code'] >= 400) {
            throw new \Exception('Model error, status:'. $careers['code'] . $careers['data']);
        }

        $collect = json_decode($careers['data']);
        $plan = $collect->plan_vigente->id;

        $courses = $service->getAll('asignatura/plan?id=' . $plan);

        if ($courses['code'] >= 400) {
            throw new \Exception('Model error, status:'. $courses['code'] . $courses['data']);
        }

        $collect = collect(json_decode($courses['data']));
        $collect = $collect->map(function($course){
            $map = [];
            $map['code'] = $course->id;
            $map['name'] = $course->nombre;
            return $map;
        });
        return $collect;
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

