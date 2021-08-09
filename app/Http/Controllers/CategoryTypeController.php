<?php

namespace App\Http\Controllers;

use App\Models\CategoryType;
use App\Traits\CreateTrait;
use App\Traits\ListTrait;
use App\Traits\UpdateTrait;
use App\Traits\ViewTrait;
use Illuminate\Http\Request;
use App\Traits\CrudTrait;

class CategoryTypeController extends Controller
{
    use ListTrait;
    use CreateTrait;
    use ViewTrait;
    use UpdateTrait;

    public function setup()
    {
        $this->setModel(CategoryType::class);
        $this->setNomenclature('tipo de categoria', 'tipos de categoria');
    }

}
