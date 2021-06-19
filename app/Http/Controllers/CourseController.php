<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Traits\CrudTrait;

class CourseController extends Controller
{
    use CrudTrait;

    public function setup()
    {
        $this->setModel(Course::class);
        $this->setNomenclature('asignatura', 'asignaturas');
    }

}
