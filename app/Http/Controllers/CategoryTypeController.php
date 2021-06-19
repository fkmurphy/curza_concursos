<?php

namespace App\Http\Controllers;

use App\Models\CategoryType;
use Illuminate\Http\Request;
use App\Traits\CrudTrait;

class CategoryTypeController extends Controller
{
    use CrudTrait;

    public function setup()
    {
        $this->setModel(CategoryType::class);
        $this->setNomenclature('tipo de categoria', 'tipos de categoria');
    }

}
