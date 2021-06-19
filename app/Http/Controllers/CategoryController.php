<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Traits\CrudTrait;

class CategoryController extends Controller
{
    use CrudTrait;

    public function setup()
    {
        $this->setModel(Category::class);
        $this->setNomenclature('categoria', 'categorias');
    }

}
