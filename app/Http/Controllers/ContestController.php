<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRequest;
use App\Models\Category;
use App\Models\CategoryType;
use App\Models\Contest;
use App\Models\RemunerationType;
use App\Models\WorkingDayType;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Traits\{
    ListTrait,
    CreateTrait,
    UpdateTrait,
    ViewTrait,
    CRUDRequestTrait,
};

class ContestController extends Controller
{
    use ListTrait;
    use ViewTrait;
    use UpdateTrait;
    use CRUDRequestTrait;

    public function setup()
    {
        $this->setModel(Contest::class);
        $this->setNomenclature('concurso', 'concursos');
        $this->request();
    }

    /**
     * Store Model
     * @param Request $request (Get request)
     * @param Contest model
     */
    public function store(\App\Http\Requests\Contest\StoreRequest $request)
    {
        $input = $request->input();
        $category = Category::whereCode($input['category_id'])->firstOrFail();
        $categoryType = CategoryType::whereCode($input['category_type_id'])->firstOrFail();
        $workingDayType = WorkingDayType::whereCode($input['working_day_type_id'])->firstOrFail();
        $remunerationType = RemunerationType::whereCode($input['remuneration_type_id'])->firstOrFail();
        $input['category_id'] = $category->id;
        $input['category_type_id'] = $categoryType->id;
        $input['working_day_type_id'] = $workingDayType->id;
        $input['remuneration_type_id'] = $remunerationType->id;
        $input['description'] = '';
        $this->model->create($input);
        return response()->json([
            'message' => 'Se guardó ' . $this->singularNomenclature,
        ], 200);
    }

    public function publicList()
    {
        return response()->json([
           'data' => Contest::where('init_date', '<', Carbon::now())->get(),
        ],200);
    }

}
