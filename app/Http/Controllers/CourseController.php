<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Traits\{
    ListTrait,
    CreateTrait,
    UpdateTrait,
    ViewTrait,
};

class CourseController extends Controller
{
    use ListTrait;
    use CreateTrait;
    use ViewTrait;
    use UpdateTrait;

    public function setup()
    {
        $this->setModel(Course::class);
        $this->setNomenclature('asignatura', 'asignaturas');
    }

    public function getByCareer($careerId)
    {
        return response()->json([
            'data' => Course::findByCareer($careerId),
            'message' => 'Datos de ' . $this->singularNomenclature,
        ], 200);
    }

    /**
     * View Model
     * @param Request $request (Get request)
     * @param Departament model
     */
    public function view(Request $request, $code)
    {
        return response()->json([
            'data' => Course::find($code),
            'message' => 'Datos de ' . $this->singularNomenclature,
        ], 200);
    }

}
