<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Events\GenerateSlug;
use App\Services\SPCService;

class Departament //extends Model
{
    protected $service;
    //protected $table = 'attribute_modules';
    //protected $hidden = [ 'id' ];
    //protected $fillable = [
    //    'name',
    //    'code',
    //];

    //protected $dispatchesEvents = [
    //    'creating' => GenerateSlug::class,
    //];
    //
    public function __construct()
    {
        $this->service = new SPCService();
    }

    public function all()
    {
        $departaments = $this->service->getDepartments();
        return $departaments['data'];
    }
}

